// import '../../node_modules/quill-image-resize-module/src/ImageResize';
// import '../../../node_modules/quill-image-resize-module/src/ImageResize';
// import '../../node_modules/quill-image-resize-module/';
// import '../../node_modules/quill-image-resize-module/src/ImageResize';
// import imageResize from 'quill-image-resize-module'
// import imageResize from './quill-image-resize-module/'
import imageResize from './quill-image-resize-module/src/ImageResize'


document.addEventListener('orchid:quill', (event) => {
    // Object for registering plugins
    event.detail.quill.register("modules/imageResize", imageResize);

    // Parameter object for initialization
    event.detail.options.modules = {
        imageResize: {
            displaySize: true
        },
        toolbar: [
            [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
            ['bold', 'italic', 'underline', 'strike'],
            [{ 'color': [] }, { 'background': [] }],
            [{ 'align': [] }],
            ['link', 'image'],

            ['clean']
          ]
    };
});
