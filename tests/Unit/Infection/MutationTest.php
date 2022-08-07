<?php

declare(strict_types=1);

use Alfiesal\InfectionGitlabComment\Infection\Mutation;

it('should create mutation from array', function () {
    $mutation = Mutation::fromArray([
        'mutator' => [
            'mutatorName' => 'PublicVisibility',
            'originalFilePath' => '/var/www/app/Application/Bus/Commands/SendPreview.php',
            'originalStartLine' => 18,
        ],

        'diff' => <<<'END'
--- Original
+++ New
@@ @@
     use GetSiteId;
     use GetMessageId;
     public const MESSAGE_NAME = 'command.automated-messages.send-preview';
-    public function recipients() : array
+    protected function recipients() : array
     {
         return $this->payload()['recipients'];
     }
 }
END
    ]);

    $this->assertEquals('PublicVisibility', $mutation->mutatorName());
    $this->assertEquals('/var/www/app/Application/Bus/Commands/SendPreview.php', $mutation->originalFilePath());
    $this->assertEquals(18, $mutation->originalStartLine());
    $this->assertEquals(<<<'END'
--- Original
+++ New
@@ @@
     use GetSiteId;
     use GetMessageId;
     public const MESSAGE_NAME = 'command.automated-messages.send-preview';
-    public function recipients() : array
+    protected function recipients() : array
     {
         return $this->payload()['recipients'];
     }
 }
END, $mutation->diff());

});
