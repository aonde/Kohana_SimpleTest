<?php
class Test_Simpletest_Site extends WebTestCase {
/* 
    function testSimulaErro() 
    {
        $this->get(Kohana::$config->load('site')->url.'index/simula_erro');
        $this->assertNoPattern('/ErrorException|error_template|HTTP_Exception/', ' Este e para dar erro: %s'); 
    }  
    function testHome() 
    {
        $this->get(Kohana::$config->load('site')->url);
        $this->assertNoPattern('/ErrorException|error_template|HTTP_Exception/', '  %s');  
    }  
    function testHomeWindows() 
    {
        $this->get(Kohana::$config->load('site')->url.Route::get('home')->uri(array('nome_categoria' => 'windows')));
        $this->assertNoPattern('/ErrorException|error_template|HTTP_Exception/', '  %s');  
    }      
    function testHomeLinux() 
    {
        $this->get(Kohana::$config->load('site')->url.Route::get('home')->uri(array('nome_categoria' => 'linux')));
        $this->assertNoPattern('/ErrorException|error_template|HTTP_Exception/', '  %s');  
    }      
    function testHomeOnline() 
    {
        $this->get(Kohana::$config->load('site')->url.Route::get('home')->uri(array('nome_categoria' => 'online')));
        $this->assertNoPattern('/ErrorException|error_template|HTTP_Exception/', '  %s');  
    } 
    function testSoftware() 
    {
        $this->get(Kohana::$config->load('site')->url.Route::get('pagina-download')->uri(array('id' => '8976', 'format' => 'adobe')));
        $this->assertNoPattern('/ErrorException|error_template|HTTP_Exception/', '  %s');  
    }    
    function testSoftwareDownload() 
    {
        $this->get(Kohana::$config->load('site')->url.Route::get('pagina-download-final')->uri(array('id' => '8976')));
        $this->assertNoPattern('/ErrorException|error_template|HTTP_Exception/', '  %s');  
    }    
    function testListaDownloads() 
    {
        $this->get(Kohana::$config->load('site')->url.Route::get('pagina-lista-busca-vazia')->uri(array()));
        $this->assertNoPattern('/ErrorException|error_template|HTTP_Exception/', ' %s');  

        $this->get(Kohana::$config->load('site')->url.Route::get('pagina-lista-busca-vazia')->uri(array('p' => '2')));
        $this->assertNoPattern('/ErrorException|error_template|HTTP_Exception/', '  %s');  

        $this->get(Kohana::$config->load('site')->url.Route::get('pagina-lista-busca')->uri(array('busca' => 'down')));
        $this->assertNoPattern('/ErrorException|error_template|HTTP_Exception/', ' %s');  
    }         
    function testLista() 
    {
        $this->get(Kohana::$config->load('site')->url.Route::get('pagina-lista')->uri(array('lista_id' => 15, 'nome_lista' => 'lista_do_marcus')));
        $this->assertNoPattern('/ErrorException|error_template|HTTP_Exception/', ' %s');  
    }             
    
 function testPost()
    {
        $response = Request::factory('index/testeview')->method('POST')
    ->post('key', 'valueedgard')->execute()->render();
        
        $this->assertPattern("/valueedgard/i", $response, 'Busca %s');

    }   */
   /*function testLoginValido() {
        $this->post('http://zarigin.edgard.local:8888/auth/logar', array('username' => 'head1536', 'password' => 'head1536'));
        $this->assertText('true');
	    $this->get('http://zarigin.edgard.local:8888');
		$this->assertText('adicionar'); 
  
    }
   function testLoginInValido() {
        $this->post('http://zarigin.edgard.local:8888/auth/logar', array('username' => 'head153236', 'password' => 'head1536'));
        $this->assertText('false');
    }
    function testVerificaEmail()
    {
        $this->get('http://zarigin.edgard.local:8888/user/verifica_mail?email=edgard.nogueira@gmail.com');
        $this->assertText('false','Teste verificacao já existe email');
        
    }

    function testVerificaEmailNaoExiste()
    {
        $this->get('http://zarigin.edgard.local:8888/user/verifica_mail?email=edgard.nogueirEMAILNAOEXIa@gmail.com');
        $this->assertText('true','Teste verificacao email que nao existe ');
    }
    
   function testLoginValidoGoogle() {
        $this->setMaximumRedirects(10); // tem que ter para ele seguir o redirect para o login do google
        $this->get('http://zarigin.edgard.local:8888/login/google.html');
        
        
        $this->assertTitle('Google Accounts'); // to na pagina de login
        
        //Passwd Email  botao signIn
        $this->setField('Email', 'equipe@aondenamoro.com');
        $this->setField('Passwd', 'maile1822');
        $this->clickSubmitById('signIn');
        $this->click('Sign in');
          // <input type="submit" class="g-button g-button-submit" name="signIn" id="signIn" value="Sign in"> 
        $this->assertTitle('Contas do Google', 'Testando Conta do google: %s'); // to na pagina de liberar acesso em ingle My Account
        $this->assertSubmit('Conceder acesso','existe botao submit %s');
        $this->clickSubmitByName('allow');  //<input type="submit" name="allow" id="allow" value="Grant access" />
                                           //     <input type="submit" name="allow" id="allow" value="Conceder acesso" />
         $this->clickSubmitById('allow');
         $this->click('Conceder acesso');


    }  
   */
}

?>