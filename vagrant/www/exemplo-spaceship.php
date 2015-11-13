<?php

$expressions = [
  '1 <=> 5',
  '1 <=> 10',
	'"1" <=> "10"',
	'"1" <=> "01"',
  '1 <=> 1.1',
  '1 <=> "1.1"',
  '"1" <=> "1.1"',
  '1 <=> 1',
  '10 <=> 10',
  '10 <=> "10"',
  '10 <=> "5"',
  '"" <=> false',
  '"bola" <=> "bola"',
  '"bola" <=> "bolo"',
  '"bola" <=> "bala"',
  '"bola" <=> "BOLA"',
  '[] <=> array()',
  '[1, 2, 3] <=> [1, 2, 3]',
  '[1, 2, 3] <=> [1, 2, 4]',
  '[1, 2, 3] <=> [1, 2]',
  '["bola", "casa"] <=> ["bola", "casa"]',
  '["bola", "casa"] <=> ["bola", "caso"]',
];

?>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">

      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">

					<h1 class="text-center">Spaceship Operator Examples</h1>

					<table class="table table-hover">
						<thead>
							<tr>
								<th class="text-center">Expressão</th>
								<th class="text-center">Resultado</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($expressions as $exp): ?>
							<tr>
								<td class="text-center"><code><?php echo htmlentities($exp); ?></code></td>
								<td class="text-center"><code><?php eval("echo $exp;"); ?></code></td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>

        </div>
      </div>
		</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
  </body>
</html>
