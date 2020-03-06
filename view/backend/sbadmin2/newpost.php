<?php $title = 'Nouveau chapitre'; ?>

<?php ob_start(); ?>

<script>
tinymce.init({
  selector: '#mytextarea',
  height: 500,
  plugins: 'table wordcount', 
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tiny.cloud/css/codepen.min.css'
  ],
  content_style: '.left { text-align: left; }' +
    'img.left { float: left; }' +
    'table.left { float: left; }' +
    '.right { text-align: right; }' +
    'img.right { float: right; }' +
    'table.right { float: right; }' +
    '.center { text-align: center; }' +
    'img.center { display: block; margin: 0 auto; }' +
    'table.center { display: block; margin: 0 auto; }' +
    '.full { text-align: justify; }' +
    'img.full { display: block; margin: 0 auto; }' +
    'table.full { display: block; margin: 0 auto; }' +
    '.bold { font-weight: bold; }' +
    '.italic { font-style: italic; }' +
    '.underline { text-decoration: underline; }' +
    '.example1 {}' +
    '.tablerow1 { background-color: #D3D3D3; }',
  formats: {
    alignleft: { selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes: 'left' },
    aligncenter: { selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes: 'center' },
    alignright: { selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes: 'right' },
    alignfull: { selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes: 'full' },
    bold: { inline: 'span', classes: 'bold' },
    italic: { inline: 'span', classes: 'italic' },
    underline: { inline: 'span', classes: 'underline', exact: true },
    strikethrough: { inline: 'del' },
    customformat: { inline: 'span', styles: { color: '#00ff00', fontSize: '20px' }, attributes: { title: 'My custom format'} , classes: 'example1'}
  },
  style_formats: [
    { title: 'Custom format', format: 'customformat' },
    { title: 'Align left', format: 'alignleft' },
    { title: 'Align center', format: 'aligncenter' },
    { title: 'Align right', format: 'alignright' },
    { title: 'Align full', format: 'alignfull' },
    { title: 'Bold text', inline: 'strong' },
    { title: 'Red text', inline: 'span', styles: { color: '#ff0000' } },
    { title: 'Red header', block: 'h1', styles: { color: '#ff0000' } },
    { title: 'Badge', inline: 'span', styles: { display: 'inline-block', border: '1px solid #2276d2', 'border-radius': '5px', padding: '2px 5px', margin: '0 2px', color: '#2276d2' } },
    { title: 'Table row 1', selector: 'tr', classes: 'tablerow1' },
    { title: 'Image formats' },
    { title: 'Image Left', selector: 'img', styles: { 'float': 'left', 'margin': '0 10px 0 10px' } },
    { title: 'Image Right', selector: 'img', styles: { 'float': 'right', 'margin': '0 0 10px 10px' } },
  ]
});
  </script>

<h1>Nouveau chapitre</h1>

<form action="index.php?action=sendpost" method="post">
    <h3>TITRE</h3>
    <input type="text" name="title" class="input-group-text" id="inputGroup-sizing-lg"></input>

    <h3>CONTENU</h3>
    <textarea name="content" id="mytextarea">Contenu du chapitre ici</textarea>
    <button type="submit" id="newPostConfirm">Envoyez</button>
</form>

<?php $content = ob_get_clean(); ?>
<?php require('template.php')?>
