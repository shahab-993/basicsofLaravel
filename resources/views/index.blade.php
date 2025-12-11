<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <title>Custom Directives</title>
</head>
<body>
 <h1>Using Custom Directives</h1>
  <h3>Frist Name is :{{ $data['FirstName'] }}</h3>
  <h3>AboutMe is :{{ $data['AboutMe'] }}</h3>
  <h3>Rating is :{{ $data['Rating'] }}</h3>
  <h3>Salary is :{{ $data['Salary'] }}</h3>
  <hr>
  <hr />
  <hr />

  <h3>First 5 Upper: @firstFiveUpper($data['FirstName'])</h3>
  <h3>First N Upper(5 characters): @firstNUpper($data['FirstName'],5)</h3>
  <h3>Length Limit (10 characters): @lenthLimit($data['AboutMe'],10)</h3>
  <h3>Rating: @rating($data['Rating'])</h3>
  <h3>Salary in Words: @convertNumberToWords($data['Salary'],'us')</h3>
  <h3>Salary with currency sign: @convertNumberToCurrency($data['Salary'],'GBP')</h3>

</body>
</html>
