
<body>
<nav class="navbar navbar-expand-xl navbar-light bg-light">
 
  
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item" style="padding-left: 120px;">
        <a class="nav-link" href="./usuario/">Inicio</a>
      </li>
      
      
      <li class="nav-item">
        <a class="nav-link" href="">Buscar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Relatório</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle"  id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Estoque
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/codeigniter/estoque">Cadastrar</a>
          <a class="dropdown-item" href="/codeigniter/estoque/listar">Listar</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle"  id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Empréstimo
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/codeigniter/emprestimo">Cadastrar</a>
          <a class="dropdown-item" href="/codeigniter/emprestimo/listar">Listar</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle"  id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Equipamento
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/codeigniter/equipamento">Cadastrar</a>
          <a class="dropdown-item" href="/codeigniter/equipamento/listar">Listar</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle"  id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Fabricante
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/codeigniter/fabricante">Cadastrar</a>
          <a class="dropdown-item" href="/codeigniter/fabricante/listar">Listar</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle"  id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Setor
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/codeigniter/setor">Cadastrar</a>
          <a class="dropdown-item" href="/codeigniter/setor/listar">Listar</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Local
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/codeigniter/local">Cadastrar</a>
          <a class="dropdown-item" href="/codeigniter/local/listar">Listar</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle"  id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Usuário - <?php echo $this->session->userdata('nome_usuario'); ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <!-- <a class="dropdown-item" href="/codeigniter/usuario/">Cadastrar</a> -->
          <a class="dropdown-item" href="/codeigniter/usuario/listar">Listar</a>
          <a class="dropdown-item" href="/codeigniter/usuario/logout">Deslogar</a>
          
          
        </div>

        
      </li>
      

   
      
    </ul>
  </div>
</nav>


