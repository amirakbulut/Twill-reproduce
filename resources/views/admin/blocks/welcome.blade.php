@formField('input', [
    'name' => 'title',
    'label' => 'Title',
    'required' => true,
    'translated' => true
])
@formField('input', [
    'name' => 'subtitle',
    'label' => 'Subtitle',
    'required' => true,
    'translated' => true
])
@formField('wysiwyg', [
    'name' => 'content',
    'label' => 'Content',
    'toolbarOptions' => ['list-ordered', 'list-unordered'],
    'placeholder' => 'Content',
    'maxlength' => 500,
    'translated' => true
])