<div class="container">
    <h3 class="text-center">Inscrivez-vous sur CoWork !</h3>
    <div class="row">
        <div class="col s12 m8 l4 offset-m2 offset-l4">
            <?php
            echo form_open('inscription');
            ?>
            <div class="input-field">
                <?php
                $nom= array(
                    'type'=>'text',
                    'name'=>'nom',
                    'id'=>'nom',
                    'value'=>set_value('nom'),
                    'class'=>'validate'
                );
                echo form_input($nom);
                echo form_label('Nom','nom');
                ?>
            </div>
            <div class="input-field">
                <?php
                $prenom= array(
                    'type'=>'text',
                    'name'=>'prenom',
                    'id'=>'prenom',
                    'value'=>set_value('prenom'),
                    'class'=>'validate'
                );
                echo form_input($prenom);
                echo form_label('Prénom','prenom');
                ?>
            </div>
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
                $tel= array(
                    'type'=>'tel',
                    'name'=>'tel',
                    'id'=>'tel',
                    'value'=>set_value('tel'),
                    'class'=>'validate'
                );
                echo form_input($tel);
                echo form_label('Téléphone','tel');
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
            <div class="input-field">
                <?php
                $confirme_mdp= array(
                    'type'=>'password',
                    'name' =>'confirme_mdp',
                    'id'=>'confirme_mdp',
                    'value'=>set_value('confirme_mdp'),
                    'class'=>'validate'
                );
                echo form_input($confirme_mdp);
                echo form_label('Confirmer mot de passe','confirme_mdp');
                ?>
            </div>
            <?php
            echo form_submit('envoi', 'Je m\'inscris',['class'=>'btn waves-effect waves-light']);

            echo form_close();
            ?>
        </div>
    </div>

</div>