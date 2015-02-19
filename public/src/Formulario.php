<div class="span10">
    <div class="well"><h1> Formulario </h1>

        <hr/>
        <p>

            <?php
            require_once("../Autoload.php");


            use Projeto3\CLabel;
            use Projeto3\CSubmit;
            use Projeto3\Form;


            $form = new Form();
            $form->OpenForm("form1", "POST", "", "");

            $Submit = new CSubmit();
            $Submit->CSubmit("botao", "submit");
            $campo = new CSubmit();
            $campo->CSubmit("campo", "text");

            $label = new CLabel();
            $label->CLabel("Digite algo", "Digite algo");
            $closeform = new Form();
            $closeform->CloseForm();

            $form->addElementos($form->getHtml());
            $form->addElementos($label->getHtml());
            $form->addElementos($campo->getHtml());
            $form->addElementos($Submit->getHtml());
            $form->addElementos($closeform->getHtml());

            echo $form->Render();

            ?>


        </p>
        <hr/>


    </div>
</div>


    
