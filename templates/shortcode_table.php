<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost:8000/wp-content/plugins/objects_plugin/assets/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">field</th>
      <th scope="col">shortcode</th>
      <th scope="col">example</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>open form</td>
      <td>[start_form_objects_plugin]</td>
      <td>[start_form_objects_plugin method="POST"]</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>input field</td>
      <td>[inputs_objects_plugin]</td>
      <td>[inputs_objects_plugin placeholder="name"  class="form-control form-control-lg"]</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>button field</td>
      <td>[buttons_objects_plugin]</td>
      <td>[buttons_objects_plugin class="btn btn-primary" value="add"]</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>close form tag</td>
      <td>[end_form_objects_plugin]</td>
      <td>[end_form_objects_plugin]</td>
    </tr>
  </tbody>
</table>
</body>
</html>