<?php

include('includes/connection.php');
include('includes/functions.php');



if( isset( $_POST['add'] ) ) {
   
    $nomePessoal = $nomeArtistico = $cpfPessoal = $rgPessoal = $orgaoPessoal = $datap = $sexo = $cidadePessoal = $bairroPessoal = $ufPessoal = $cepPessoal = $enderecoPessoal = $emailPessoal = $emailPessoal2 = $telPessoal1 = $telPessoal2 = "";
    
    $nomePessoal    = htmlspecialchars( $_POST["nomepessoal"] );
    $nomeArtistico    = htmlspecialchars( $_POST["nomeartistico"] );
    $cpfPessoal    = htmlspecialchars( $_POST["cpfpessoal"] );
    $rgPessoal    = htmlspecialchars( $_POST["rgpessoal"] );
    $orgaoPessoal    = htmlspecialchars( $_POST["orgaopessoal"] );
    $datap    =    htmlspecialchars( $_POST["datap"] );
    $sexo    =    htmlspecialchars( $_POST["sexo"] );
    $cidadePessoal    = htmlspecialchars( $_POST["cidadepessoal"] );
    $bairroPessoal    = htmlspecialchars( $_POST["bairropessoal"] );
    $ufPessoal    = htmlspecialchars( $_POST["ufpessoal"] );
    $cepPessoal    = htmlspecialchars( $_POST["ceppessoal"] );
    $enderecoPessoal    = htmlspecialchars( $_POST["enderecopessoal"] );
    $emailPessoal    = htmlspecialchars( $_POST["emailpessoal"] );
    $emailPessoal2    = htmlspecialchars( $_POST["emailpessoal2"] );
    $telPessoal1    = htmlspecialchars( $_POST["telpessoal1"] );
    $telPessoal2    = htmlspecialchars( $_POST["telpessoal2"] );
    
    
    if( $nomePessoal ) {
    
        $query = "INSERT INTO clients (id, name, name2, cpf, rg, orgao, data, sexo, cidade, bairro, uf, cep, endereco, email, email2, tel1, tel2, date_added) VALUES (NULL, '$nomePessoal', '$nomeArtistico', '$cpfPessoal', '$rgPessoal', '$orgaoPessoal', '$datap', '$sexo', '$cidadePessoal', '$bairroPessoal', '$ufPessoal', '$cepPessoal', '$enderecoPessoal', '$emailPessoal', '$emailPessoal2', '$telPessoal1', '$telPessoal2', CURRENT_TIMESTAMP)";
        
        $result = mysqli_query( $conn, $query );
        

        if( $result ) {
            header( "Location: clients.php?alert=success" );
            
        } else {
            
           
            echo "Error: ". $query ."<br>" . mysqli_error($conn);
        }
        
    }
    
}


mysqli_close($conn);

?>

<form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post">
    <div class="form-group col-md-12">
                            <label for="nomepessoal">Nome completo</label>
                            <div class="input-group col-md-12">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <input id="nomepessoal" type="text" class="form-control" placeholder="Nome completo..." value="" name="nomepessoal" required>
                            </div>
                        </div>
                        
                        <div class="form-group col-md-12">
                            <label for="nomeartistico">Nome artístico</label>
                            <div class="input-group col-md-12">
                                <div class="input-group-addon">
                                    <i class="fa fa-user-plus"></i>
                                </div>
                                <input id="nomeartistico" type="text" class="form-control" placeholder="Tiririca..."" value="" name="nomeartistico">
                            </div>
                        </div>
                        
                        <div class="form-group col-md-4">
                            <label for="cpfpessoal">CPF</label>
                            <div class="input-group col-md-12">
                                <div class="input-group-addon">
                                    <i class="fa fa-info-circle"></i>
                                </div>
                              <input id="cpfpessoal" type="text" placeholder="000.000.000-00" class="form-control" data-inputmask='"mask": "999.999.999-99"' data-mask value="" name="cpfpessoal" required>
                            </div>  
                        </div>
                        
                        <div class="form-group col-md-4">
                            <label for="rgpessoal">RG</label>
                            <div class="input-group col-md-12">
                                <div class="input-group-addon">
                                    <i class="fa fa-info"></i>
                                </div>
                              <input id="rgpessoal" type="text" placeholder="0.000.000" class="form-control" data-inputmask='"mask": "9.999.999"' data-mask value="" name="rgpessoal" required>
                            </div>  
                        </div>
                        
                        <div class="form-group col-md-4">
                            <label for="orgaopessoal">Órgão expedidor/UF</label>
                            <div class="input-group col-md-12">
                                <div class="input-group-addon">
                                    <i class="fa fa-institution"></i>
                                </div>
                              <input id="orgaopessoal" type="text" placeholder="SSP/UF" class="form-control" data-inputmask='"mask": "aaa/aa"' data-mask value="" name="orgaopessoal" required>
                            </div>  
                        </div>
                        
                        <div class="form-group col-md-4">
                            <label for="datap">Data de nascimento:</label>
                            <div class="input-group col-md-12">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <input id="datap" type="text" placeholder="00/00/0000" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask value="" name="datap" required>
                            </div>  
                        </div>
                        
                        <div class="form-group col-md-4">
                            <label for="sexo">SEXO</label>
                            <div class="input-group col-md-12">
                                <div class="input-group-addon">
                                    <i class="fa fa-venus-mars"></i>
                                </div>
                              <input id="sexo" type="text" placeholder="M ou F" class="form-control" data-inputmask='"mask": "a"' data-mask value="" name="sexo" required>
                            </div>  
                        </div>
                         
                        <div class="form-group col-md-4">
                            <label for="cidadepessoal">Cidade</label>
                            <div class="input-group col-md-12">
                                <div class="input-group-addon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <input id="cidadepessoal" type="text" class="form-control" placeholder="Cidade/Capital" value="" name="cidadepessoal" required>
                            </div>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="bairropessoal">Bairro</label>
                            <div class="input-group col-md-12">
                                <div class="input-group-addon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <input id="bairropessoal" type="text" class="form-control" placeholder="Entorno" value="" name="bairropessoal" required>
                            </div>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="ufpessoal">UF</label>
                            <div class="input-group col-md-12">
                                <div class="input-group-addon">
                                    <i class="fa fa-map-signs"></i>
                                </div>
                                <input id="ufpessoal" type="text" class="form-control" placeholder="Estado" data-inputmask='"mask": "aa"' data-mask value="" name="ufpessoal" required>
                            </div>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="ceppessoal">CEP</label>
                            <div class="input-group col-md-12">
                                <div class="input-group-addon">
                                    <i class="fa fa-map"></i>
                                </div>
                                <input id="ceppessoal" type="text" class="form-control" placeholder="00.000.000" data-inputmask='"mask": "99999-999"' data-mask value="" name="ceppessoal" required>
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="enderecopessoal">Endereço</label>
                            <div class="input-group col-md-12">
                                <div class="input-group-addon">
                                    <i class="fa fa-location-arrow"></i>
                                </div>
                                <input id="enderecopessoal" type="text" class="form-control" placeholder="Endereço *" value="" name="enderecopessoal" required>
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="emailpessoal">Email</label>
                            <div class="input-group col-md-12">
                                <div class="input-group-addon">
                                    <i class="fa fa-mail-forward"></i>
                                </div>
                                <input id="emailpessoal" type="email" class="form-control" placeholder="E-mail 1 *" value="" name="emailpessoal" required>
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="emailpessoal2">Email2</label>
                            <div class="input-group col-md-12">
                                <div class="input-group-addon">
                                    <i class="fa fa-mail-forward"></i>
                                </div>
                                <input id="emailpessoal2" type="email" class="form-control" placeholder="E-mail 2 (Opcional)" value="" name="emailpessoal2">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="telpessoal1">Telefone Celular *</label>
                            <div class="input-group col-md-12">
                              <div class="input-group-addon">
                                <i class="fa fa-mobile-phone"></i>
                              </div>
                              <input id="telpessoal1" type="text" placeholder="Adicione 9 antes do número" class="form-control" data-inputmask='"mask": "(99) 99999-9999"' data-mask value="" name="telpessoal1" required>
                            </div>  
                        </div>

                        <div class="form-group col-md-6">
                            <label for="telpessoal2">Telefone Fixo </label>
                            <div class="input-group col-md-12">
                              <div class="input-group-addon">
                                <i class="fa fa-phone"></i>
                              </div>
                              <input id="telpessoal2" type="text" placeholder="(Opcional)" class="form-control" data-inputmask='"mask": "(99) 99999-9999"' data-mask value="" name="telpessoal2">
                            </div>  
                        </div>
                            
                        <div class="form-group col-md-12">
                            <label for="selecao-arquivo">Insira uma foto sua</label><br>
                            <label class="sel" for='selecao-arquivo'>Selecionar um arquivo <span class="hidden-xs"> &#187;</span></label>
                              <input id='selecao-arquivo' type='file' value="" name="selecao-arquivo" />
                              <span id='file-name'></span><br><br><br>
                              
                              <button type="submit" name="add" class="btn btn-default pull-left"><a href="clients.php">Cancelar</a></button>

                        <button type="submit" name="add" class="btn btn-info pull-right">Cadastrar!</button>
                        </div>

    <!-- fim de dados pessoais -->
</form>
