<?php

namespace App\Orchid\Screens;

use App\Models\Candidate;
use App\Models\Candidature;
use App\Models\Circumscription;
use App\Models\Cursus;
use App\Models\Diploma;
use App\Models\Experience;
use App\Models\Mandate;
use App\Models\Memo;
use App\Models\Party;
use App\Models\Photo;
use App\Models\Province;
use App\Models\video;
use App\Models\Year;
use App\Orchid\Layouts\CircumscriptionListener;
use App\Orchid\Layouts\CursusListLayout;
use App\Orchid\Layouts\DiplomaListLayout;
use App\Orchid\Layouts\ExperienceListLayout;
use App\Orchid\Layouts\PhotoListLayout;
use App\Orchid\Layouts\VideoListLayout;
use App\Src\TinyMCE;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
// use kkit\OrchidTinyMCEField\TinyMCE;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\CheckBox;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Group;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Quill;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;

class CandidatureEditScreen extends Screen
{
    private $candidate;
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Candidate $candidate): iterable
    {
        $this->candidate = $candidate;

        // dd($this->candidate);
        return [
            'candidate' => $candidate,
            'diplomas' => Diploma::where('candidate_id',$candidate->id)->get(),
            'experiences' => Experience::where('candidate_id',$candidate->id)->get(),
            'photos' => Photo::where('candidate_id',$candidate->id)->get(),
            'videos' => video::where('candidate_id',$candidate->id)->get(),
            'videos' => video::where('candidate_id',$candidate->id)->get(),

        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Editer candidature';
    }

    public function description(): ?string
    {
        return "Interface d'édition de la candidature";
    }
    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Sauvegarder')->method('saveCandidate')->type(Color::SUCCESS())->icon('check'),
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {

        // if ($this->candidate) {
        //     dd($this->candidate->candidature);
        // }
        return [

            Layout::rows([
                Group::make([
                    ModalToggle::make('Ajouter Diplôme')->modal('diplomaModal')->method('saveDiploma')->type(Color::PRIMARY())->icon('plus'),
                    ModalToggle::make('Ajouter Expériences')->modal('experienceModal')->method('saveExperience')->type(Color::SECONDARY())->icon('plus'),
                    ModalToggle::make('Ajouter Photos')->modal('photoModal')->method('savePhoto')->type(Color::SUCCESS())->icon('plus'),
                    ModalToggle::make('Ajouter Vidéos')->modal('videoModal')->method('saveVideo')->type(Color::WARNING())->icon('plus'),
                ])->autoWidth(),
            ])->title('Edition Avancée du candidat'),

            Layout::tabs([
                'Candidat' => [

                    Layout::block(Layout::rows(
                        [
                            Input::make('candidate.name')
                                ->title('Nom:')
                                ->placeholder('Entrez le nom'),
                            Input::make('candidate.lastname')
                                ->title('Postnom:')
                                ->placeholder('Entrez le postnom'),
                            Input::make('candidate.firstname')
                                ->title('candidate.Prénom:')
                                ->placeholder('Entrez le prénom'),
                            Select::make('candidate.gender')
                                ->title('Genre:')
                                ->options([
                                    'M' => 'Masculin',
                                    'F' => 'Féminin',
                                ]),
                            Cropper::make('candidate.photo')
                                ->title('Photo:')
                                ->width(174)
                                ->height(174),
                            Relation::make('candidate.id_party')
                                ->title('Party:')
                                ->fromModel(Party::class,'name','id'),
                            TextArea::make('candidate.slogan')
                                ->title('Slogan')
                                ->placeholder('Entrez le slogan'),
                            Input::make('candidate.id_facebook')
                                    ->title('Id Facebook')
                                    ->placeholder("Entrez l'ID facebook"),
                            Input::make('candidate.id_twitter')
                                    ->title('Id Twitter')
                                    ->placeholder("Entrez l'ID Twitter"),
                            Input::make('candidate.id_linkedIn')
                                    ->title('Id LinkedIn')
                                    ->placeholder("Entrez l'ID Linkedin"),
                        ]
                    ))
                    ->title('Identité')
                    ->description('Inserez y les informations du candidat')
                    ->commands(
                        Button::make(__('Save'))
                            ->type(Color::SUCCESS())
                            ->icon('check')
                            ->method('saveCandidate')
                    ),
                ],
                'Contenu' =>Layout::accordion([
                    'Les Diplômes' => [
                        Layout::block([
                            Layout::rows([
                                // Button::make('Ajouter')->method('buttonClickProcessing')->type(Color::PRIMARY())->icon('plus'),
                                ModalToggle::make('Ajouter')
                                            ->modal('diplomaModal')
                                            ->method('saveDiploma')
                                            ->type(Color::PRIMARY())
                                            ->icon('plus')
                                            // ->asyncParameters('Hello world!')
                                            ,

                            ])
                        ])->title('Action Ajouter')
                            ->description('Si vous voulez ajouter une réalisation académique du candidat.'),

                        DiplomaListLayout::class,
                    ],
                    'Les Expériences' => [
                        Layout::block([
                            Layout::rows([
                                ModalToggle::make('Ajouter')
                                            ->modal('experienceModal')
                                            ->method('saveExperience')
                                            ->type(Color::PRIMARY())
                                            ->icon('plus'),
                            ])
                        ])->title('Action Ajouter')
                            ->description('Si vous voulez ajouter une expérience du candidat.'),

                            ExperienceListLayout::class
                        ],
                    'Les photos' => [
                        Layout::block([
                            Layout::rows([
                                ModalToggle::make('Ajouter')
                                            ->modal('photoModal')
                                            ->method('savePhoto')
                                            ->type(Color::PRIMARY())
                                            ->icon('plus'),
                            ])
                        ])->title('Action Ajouter')
                            ->description('Si vous voulez ajouter une réalisation photos du candidat.'),

                            PhotoListLayout::class
                        ],
                    'Les vidéos' => [

                        Layout::block([
                            Layout::rows([
                                ModalToggle::make('Ajouter')
                                            ->modal('videoModal')
                                            ->method('saveVideo')
                                            ->type(Color::PRIMARY())
                                            ->icon('plus'),
                            ])
                        ])->title('Action Ajouter')
                            ->description('Si vous voulez ajouter une réalisation vidéo du candidat.'),

                        VideoListLayout::class,
                    ],
                    'Mémos' => [
                        Layout::block(Layout::rows([
                            Input::make('candidate.memo.candidate_id')
                                ->value($this->candidate->id)
                                ->hidden(),
                            Input::make('candidate.memo.lnk_video')
                                ->title('Vidéo Couverture')
                                ->placeholder('Collez le lien')
                                ->help('Collez le lien embeb de la vidéo'),
                        ]))
                        ->title('Vidéo Couverture')
                        ->description('Inserez le lien de la vidéo de couverture.')
                        ->commands(
                            Button::make(__('Save'))
                                ->type(Color::PRIMARY())
                                ->icon('check')
                                ->method('saveMemo')
                        ),
                        Layout::block([
                            Layout::rows([
                                Button::make('Sauvegarder')
                                    ->method('saveMemo')
                                    ->type(Color::SUCCESS())
                                    ->icon('check'),
                            ])
                        ])->title('Action Ajouter')
                            ->description('Si vous voulez ajouter une réalisation académique du candidat.'),

                        Layout::rows([
                            TinyMCE::make('candidate.memo.content')
                        ]),
                    ]

                ]),

                'Formule' => [
                    CircumscriptionListener::class,

                Layout::block(Layout::rows([
                        Select::make('candidate.candidature.mandates')
                        ->fromModel(Mandate::class,'name','id')
                        ->empty('No  Select')
                        ->multiple(),
                    ]))
                    ->title('Mandat')
                    ->description('Inserez y les informations du Mandat'),

                Layout::block(Layout::rows([
                    Relation::make('candidate.candidature.year')
                        ->title('Année:')
                        ->fromModel(Year::class,'label','id')
,
                    ]))
                    ->canSee($this->candidate->id ? true : false)
                    ->title('Année Electoral')
                    ->description("Inserez y les informations de l'année électorale")
                    ->commands(
                        Button::make(__('Save'))
                            ->type(Color::SUCCESS())
                            ->icon('check')
                            ->method('saveFormule')
                    ),

                ],
            ]),


            //The modals
            Layout::modal('diplomaModal', Layout::rows([
                Input::make('diploma.candidate_id')
                    ->value($this->candidate->id)
                    ->hidden(),
                Input::make('diploma.title')
                    ->title('titre diplôme')
                    ->placeholder("Tapez le nom de l'institution"),
                Input::make('diploma.institution_name')
                    ->title('Nom institution')
                    ->placeholder("Tapez le nom de l'institution"),
                Cropper::make('diploma.institution_logo')
                    ->title('Logo institution'),
                TextArea::make('diploma.description')
                    ->title('Description')
                    ->placeholder('Décrivez le cursus'),
                Input::make('diploma.start_year')
                    ->title('Année Début')
                    ->placeholder("Tapez l'année du début'"),
                Input::make('diploma.end_year')
                    ->title('Année Fin')
                    ->max(4)
                    ->placeholder("Tapez l'année de la fin'"),
            ]))
            ->title('Ajouter un Diplôme')
            ->async('asyncGetDataDiploma'),

            Layout::modal('experienceModal', Layout::rows([
                Input::make('experience.candidate_id')
                    ->value($this->candidate->id)
                    ->hidden(),
                Input::make('experience.title')
                    ->title('Titre Expérience')
                    ->placeholder("Tapez le titre de l'expérience"),
                Input::make('experience.institution_name')
                    ->title('Nom institution')
                    ->placeholder("Tapez le nom de l'institution"),
                Cropper::make('experience.institution_logo')
                    ->title('Logo institution'),
                TextArea::make('experience.description')
                    ->title('Description')
                    ->placeholder('Décrivez le cursus'),
                Input::make('experience.start_year')
                    ->title('Année Début')
                    ->placeholder("Tapez l'année du début'"),
                Input::make('experience.end_year')
                    ->title('Année Fin')
                    ->placeholder("Tapez l'année de la fin'"),
            ]))->title('Ajouter une Expérience'),

            Layout::modal('photoModal', Layout::rows([
                Input::make('photo.candidate_id')
                    ->value($this->candidate->id)
                    ->hidden(),
                Input::make('photo.title')
                    ->title('Titre')
                    ->placeholder('Tapez le titre')
                    ->help('Inserez-y le titre de la photo'),
                Cropper::make('photo.image')
                    ->title('Image')
                    ->help("Selectionnez l'image avec des dimensions requise"),
            ]))->title('Ajouter une Image'),

            Layout::modal('videoModal', Layout::rows([
                Input::make('video.candidate_id')
                    ->value($this->candidate->id)
                    ->hidden(),
                Input::make('video.title')
                    ->title('Titre')
                    ->placeholder('Tapez le titre')
                    ->help('Inserez-y le titre de la vidéo'),
                Input::make('video.link')
                    ->title('Lien de la vidéo')
                    ->placeholder('Collez le lien')
                    ->help('Collez le lien de la vidéo.'),
            ]))->title('Ajouter une vidéo'),
        ];
    }

    public function saveCandidate(Request $request, Candidate $candidate){


        if ($this->candidate) {
            $candidate = $this->candidate;
        }
        $valide = $request->validate([
            'candidate.name' => ['required'],
            'candidate.lastname' => ['required'],
            'candidate.firstname' => ['required'],
            'candidate.gender' => ['required'],
            'candidate.photo' => ['required'],
            'candidate.id_party' => ['required'],
            'candidate.slogan' => ['required'],
            'candidate.id_facebook' => ['required'],
            'candidate.id_twitter' => ['required'],
            'candidate.id_linkedIn' => ['required'],
            // Rule::unique(User::class, 'email')->ignore($user),
        ]);

        // dd($request->input(),$valide,$this->candidate,$candidate);


        $candidate->photo = $request->input('candidate')['photo'];


        // si le photo n'a pas changé
        if ($candidate->isClean('photo')) {
            $candidate->fill($request->input('candidate'));
            $candidate->save();

        }

        // si le photo a changé
        if ($candidate->isDirty('photo')) {

            // dd('photo chagé',$candidate->isDirty('photo'),public_path($request->input('candidate')['photo']));
            $path_photo = str_replace("\\","/",public_path($request->input('candidate')['photo']));
            $type = pathinfo($path_photo, PATHINFO_EXTENSION);
            $data = file_get_contents($path_photo);
            $imageBase64 = 'data:image/' . $type . ';base64,' . base64_encode($data);



            $candidate->fill($valide['candidate']);
            $candidate->photo = $imageBase64;
            // dd($candidate);

            $candidate->save();
        }


        $image_path = public_path($request->input('candidate')['photo']);
        if (File::exists($image_path)) {
            File::delete($image_path);
        }

        $folder_path = public_path('/storage');

        if (File::isDirectory($folder_path)) {
            $directories = File::directories($folder_path);
            foreach ($directories as $directory) {
                File::deleteDirectory($directory);
            }
        }

        return redirect()->route('platform.candidature.edit',[$candidate->id]);
    }

    public function saveDiploma(Request $request,Candidate $candidate){


        $diploma = new Diploma();

       $data =  $request->validate([
            'diploma.candidate_id' => ['required'],
            'diploma.title' => ['required'],
            'diploma.institution_name' => ['required'],
            'diploma.institution_logo' => ['required'],
            'diploma.description' => ['required','max:70'],
            'diploma.start_year' => ['required','digits:4'],
            'diploma.end_year' => ['required','digits:4'],
            // Rule::unique(User::class, 'email')->ignore($user),
        ]);

        $diploma->institution_logo = $request->input('diploma')['institution_logo'];

        // si le institution_logo n'a pas changé
        if ($diploma->isClean('institution_logo')) {
            $diploma->fill($request->input('diploma'));
            $diploma->save();

        }

        // si le institution_logo a changé
        if ($diploma->isDirty('institution_logo')) {

            // dd('institution_logo chagé',$diploma->isDirty('institution_logo'),public_path($request->input('diploma')['institution_logo']));
            $path_institution_logo = str_replace("\\","/",public_path($request->input('diploma')['institution_logo']));
            $type = pathinfo($path_institution_logo, PATHINFO_EXTENSION);
            $data = file_get_contents($path_institution_logo);
            $imageBase64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

            $diploma->fill($request->input('diploma'));
            $diploma->institution_logo = $imageBase64;
            $diploma->save();
        }

        $folder_path = public_path('/storage');

        if (File::isDirectory($folder_path)) {
            $directories = File::directories($folder_path);
            foreach ($directories as $directory) {
                File::deleteDirectory($directory);
            }
        }

        return redirect()->route('platform.candidature.edit',$request->input('diploma')['candidate_id']);
        // $diploma = new Diploma();
        // $diploma->fill($request->input('diploma'))->save();
    }

    public function saveExperience(Request $request,Candidate $candidate){

        $request->validate([
            'experience.title' => ['required'],
            'experience.institution_name' => ['required'],
            'experience.institution_logo' => ['required'],
            'experience.description' => ['required','max:70'],
            'experience.start_year' => ['required','digits:4'],
            'experience.end_year' => ['required','digits:4'],
            // Rule::unique(User::class, 'email')->ignore($user),
        ]);


        $experience = new Experience();
        $experience->fill($request->input('experience'))->save();
    }

    public function savePhoto(Request $request){
        $request->validate([
            'photo.title' => ['required'],
            'photo.image' => ['required'],
            // Rule::unique(User::class, 'email')->ignore($user),
        ]);

        $photo = new Photo();
        $photo->fill($request->input('photo'))->save();
    }

    public function saveVideo(Request $request,Candidate $candidate){

        $request->validate([
            'video.title' => ['required'],
            'video.link' => ['required'],
            // Rule::unique(User::class, 'email')->ignore($user),
        ]);

        $video = new video();
        $video->fill($request->input('video'))->save();
    }

    public function saveMemo(Request $request,Candidate $candidate){
        // dd($request->input());
        $memo = $candidate->memo ?? new Memo();
        $memo->fill($request->input('candidate')['memo']);
        $memo->content = $request->input('tinymce-wrapper-');
        // dd($memo);

        $memo->save();
    }

    public function saveFormule(Request $request, Candidate $candidate){

        // Validator::make($request->route('candidate'), [
        //     'id' => 'unique:candidatures,candidate_id',
        // ]);

        $candidature = Candidature::updateOrCreate([
            'candidate_id' => $request->route('candidate')['id']],
            ['id_circumscription' => $request->input('candidate.candidature.circumscription.id'),
            'id_year' => $request->input('candidate.candidature.year'),
        ]);

        // dd($candidate->candidature->mandates->isEmpty(),$candidate->candidature->mandates);
        // dd($request->input('candidate.candidature.mandates'));
        if (!($request->input('candidate.candidature.mandates') == null)) {
            $mandates = $request->input('candidate.candidature.mandates');

            DB::table('candidature_mandate')->where('candidature_id',$candidate->candidature->id)->delete();
            // dd($request->input('candidate.candidature.mandates'));

            foreach ($mandates as $key => $value) {
                DB::table('candidature_mandate')->insert([
                    'candidature_id' =>$candidature->id,
                    'mandate_id' => $value
                ]);
            }
            // dd($candidate->candidature->id,DB::table('candidature_mandate')->where('candidature_id',$candidate->candidature->id)->delete(),
            // $request->input('candidate.candidature.mandates'));
        }



    }

    public function asyncGetDataDiploma(/* string $welcome */): array
    {
        dd(Diploma::find(1));
        return [
            'diploma' => Diploma::find(1),
        ];
    }

    public function asyncFindName(int $province = null)
    {

        return [
            'province' => $province,
            // 'name' => $name,
            'result' => 2,
        ];
    }

    public function asyncGetCircumscription(int $province = null)
    {

        return [
            'province' => $province,
            'result' => 2,

        ];
    }
}
