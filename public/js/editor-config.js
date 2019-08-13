var editor_config = {
    toolbar: [
        {name: 'basicstyles', items: ['Bold','Italic','Underline','RemoveFormat']},
        // {name: 'format', items: ['Format']},
        {name: 'paragraph', items: ['BulletedList']},
        {name: 'link', items: ['Link','Unlink']},
        {name: 'undo', items: ['Undo','Redo']}
    ],

};
editor_config.height = '330px';
CKEDITOR.replace('textarea-1', editor_config );