<div class="container">
    <h3 class="text-center">Identifiez-vous sur CoWork !</h3>
    <div class="row">
        <div class="col s12 m8 l4 offset-m2 offset-l4">
            <?php
            echo form_open('login');
            ?>
            <div class="input-field">
                <?php
                $mail= array(
                    'type'=>'email',
                    'name'=>'mail',
                    'id'=>'mail',
                    'value'=>set_value('mail'),
                    'class'=>'validate'
                );
                echo form_input($mail);
                echo form_label('Email','mail');
                ?>
            </div>
            <div class="input-field">
                <?php
                $mdp= array(
                    'type'=>'password',
                    'name' =>'mdp',
                    'id'=>'mdp',
                    'value'=>set_value('mdp'),
                    'class'=>'validate'
                );
                echo form_input($mdp);
                echo form_label('Mot de passe','mdp');
                ?>
            </div>
            <?php
            echo form_submit('envoi', 'Valider',['class'=>'btn waves-effect waves-light']);

            echo form_close();
            ?>
        </div>
    </div>

</div>