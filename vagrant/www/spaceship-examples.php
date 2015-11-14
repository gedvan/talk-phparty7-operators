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

require 'header.php'; ?>

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

<?php require 'footer.php';
