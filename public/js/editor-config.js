var editor_config = {
    toolbar: [
        {name: 'basicstyles', items: ['Bold','Italic','Underline','Strike','-','RemoveFormat']},
        {name: 'format', items: ['Format']},
        {name: 'paragraph', items: ['Indent','Outdent','-','BulletedList','NumberedList']},
        {name: 'link', items: ['Link','Unlink']},
        {name: 'undo', items: ['Undo','Redo']}
    ],

};
CKEDITOR.replace('textarea-1', editor_config );