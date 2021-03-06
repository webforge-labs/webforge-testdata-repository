<?php

namespace Webforge\TestData\PHPCodeStandard\PSR;

class ForeachNoKeyCase extends CodeIndentation {

  /**
   * @return string correctly indentend in PSR2
   */
  public function toPSR2() {
    return <<<'PHP'
foreach ($iterable as $value) {
    echo "foreach body";
}

PHP;
  }

  /**
   * @return string in some indentation
   */
  public function toString() {
    return <<<'PHP'
foreach ($iterable as $value) {
    echo "foreach body";
}

PHP;
  }
}
?>