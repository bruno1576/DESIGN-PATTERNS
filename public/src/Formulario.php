<div class="span10">
    <div class="well"><h1> Formulario </h1>

        <hr/>
        <p>

            <?php
            require_once("../Autoload.php");


            use Projeto3\CLabel;
            use Projeto3\CloseForm;
            use Projeto3\CSubmit;
            use Projeto3\OpenForm;
            use Projeto3\Render;

            $form = new OpenForm();
            $form->OpenForm("form1", "POST", "", "");

            $Submit = new CSubmit();
            $Submit->CSubmit("botao", "submit");
            $campo = new CSubmit();
            $campo->CSubmit("campo", "text");

            $label = new CLabel();
            $label->CLabel("Digite algo", "Digite algo");

            $CloseForm = new CloseForm();
            $Render = new Render();
            $Render->addElementos($form->getHtml());
            $Render->addElementos($label->getHtml());
            $Render->addElementos($campo->getHtml());
            $Render->addElementos($Submit->getHtml());
            $Render->addElementos($CloseForm->getHtml());

            echo $Render->Render();

            ?>


        </p>
        <hr/>


    </div>
</div>


    
