<?php echo $this->Form->create('Evento');?>
	<fieldset>
		<legend><?php 
                if ( $this->action == 'add' )
                    $theAction = 'Novo';
                else
                    $theAction = 'Editar';
                __($theAction . ' Evento'); 
                ?></legend>
	<?php
            if ( isset($this->passedArgs['fk']) ) {
                $fk = $this->passedArgs['fk'];
            } elseif ( isset($this->data['Evento']['fk']) ) {
                $fk = $this->data['Evento']['fk'];
            } else {
                $fk = null;
            }
            if ( !is_null($fk) ) {
                echo $this->Form->input('licitacao_id',array('disabled'=>'true','label'=>'Licitação','value'=>$fk));
                echo $this->Form->input('licitacao_id',array('type'=>'hidden','value'=>$fk));                                    
            } else {
                echo $this->Form->input('licitacao_id',array('label'=>'Licitação','empty'=>'-- Selecione a licitação --'));        
            }
            echo $this->Form->input('id');
            echo $this->Form->input('tipoevento_id',array('label'=>'Tipo','empty'=>'-- Selecione o tipo --'));                
            if ( $this->action == 'add' )
                echo $this->Form->input('dt_eve',array('type'=>'text','label'=>'Data','class'=>'datepicker','size'=>'10','value'=>date('d/m/Y')));
            else
                echo $this->Form->input('dt_eve',array('type'=>'text','label'=>'Data','class'=>'datepicker','size'=>'10'));
            echo $this->Form->input('texto_eve',array('label'=>'Texto','cols'=>'80'));
            echo $this->Form->input('usuario_id',array('type'=>'hidden','value'=>$user['Usuario']['id']));                
            if ( !is_null($fk) )                
                echo $this->Form->input('fk',array('type'=>'hidden','value'=>$fk));                                        
	?>
	</fieldset>
<?php echo $this->Form->end(__('Gravar', true));?>
<!-- SALPLUS | Copyright: 2013 Smartbyte - Luis E. S. Dias | Contato: smartbyte.systems@gmail.com  -->