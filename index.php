<?php include_once('mostrar.php')?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Um site de vendas de rosa do deserto." />
    <title>Churrasco do Romildo</title>
    <link rel="stylesheet" href="style.css" />
  </head>

  <body>
    <header class="cabecalho">
      <div class="logo">
        <img
          src="logo.svg"
          alt="logo da empresa uma foto de uma rosa do deserto."
          width="60px"
          height="80p"
        />
        <h1>Churrasco do Romildo</h1>
      </div>
      <nav>
        <a href="#produtos">itens do Churrasco</a>
        <a href="#escolha">o que vai trazer?</a>
        <a href="#lista-convidados">Confirmados</a>
      </nav>
    </header>
    <main class="principal">
      <section id="produtos" class="produtos">
        <h2>Itens Do Churrasco</h2>
        <div class="colecao">
          <div class="produto-itens">
            <img src="carvao.jpg" alt="" />
            <div class="descricao">
              <h3 class="desc">Carvão</h3>
              
            </div>
          </div>
          <div class="produto-itens">
            <img src="copo.jpg" alt="" />
            <div class="descricao">
              <h3 class="desc">Copos</h3>
             
            </div>
          </div>
          <div class="produto-itens">
            <img src="talheres.jpg" alt="" />
            <div class="descricao">
              <h3 class="desc">Garfos e Facas</h3>  
            </div>
          </div>
          <div class="produto-itens">
            <img src="toscana.jpeg" alt="" />
            <div class="descricao">
              <h3 class="desc">Toscana</h3>
            </div>
          </div>
          <div class="produto-itens">
            <img src="picanha.jpg" alt="" />
            <div class="descricao">
              <h3 class="desc">Picanha</h3> 
            </div>
          </div>
          <div class="produto-itens">
            <img src="alcatra.jpg" alt="" />
            <div class="descricao">
              <h3 class="desc">Alcatra</h3>  
            </div>
          </div>
          <div class="produto-itens">
            <img src="costela.jpg" alt="" />
            <div class="descricao">
              <h3 class="desc">Costela</h3>
              
            </div>
          </div>
          <div class="produto-itens">
            <img src="contrafile.jpg" alt="" />
            <div class="descricao">
              <h3 class="desc">Contra-filé</h3>
              
            </div>
          </div>
          <div class="produto-itens">
            <img src="maminha.jpg" alt="" />
            <div class="descricao">
              <h3 class="desc">Maminha</h3>
              
            </div>
          </div>
          <div class="produto-itens">
            <img src="vinagrete.jpg" alt="" />
            <div class="descricao">
              <h3 class="desc">Vinagrete</h3>
              
            </div>
          </div>
          <div class="produto-itens">
            <img src="farofa.jpg" alt="" />
            <div class="descricao">
              <h3 class="desc">Farofa</h3>
             
            </div>
          </div>
          <div class="produto-itens">
            <img src="sucos.jpg" alt="" />
            <div class="descricao">
              <h3 class="desc">Sucos</h3>
             
            </div>
          </div>
            <div class="produto-itens">
              <img src="refri.jpg" alt="" />
              <div class="descricao">
                <h3 class="desc">Refrigerantes</h3>
               
              </div>
            </div>
              <div class="produto-itens">
                <img src="cerveja.jpg" alt="" />
                <div class="descricao">
                  <h3 class="desc">Cervejas</h3>
                 
                </div>
              </div>
                <div class="produto-itens">
                  <img src="bebidas.jpg" alt="" />
                  <div class="descricao">
                    <h3 class="desc">bebidas Quentes</h3>
                   
                  </div>
                </div>
          
        </div>
      </section>
      <section id="escolha">
        <h1 class="titulo-escolha">Já Fez sua escolha?</h1>
        <div class="form-escolha">
          <div class="container">
            
            <form action="info.php" method="post">
              <label for="nome">Nome</label>
              <input
                type="text"
                id="nome"
                name="nome"
                placeholder="Seu nome.."
              />
              <label for="acompanhates">Você e mais quantas pessoas:</label>
              <select id="acompanhate" name="acompanhante">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>

              <label for="itens">O que vai trazer ?</label>
              <select id="lista" name="lista">
                <option value="carvao">Carvão</option>
                <option value="copo">Copos Descartável</option>
                <option value="usa">Garfo e Facas</option>
                <option value="toscana">Toscana</option>
                <option value="picanha">Picanha</option>
                <option value="alcatra">Alcatra</option>
                <option value="costela">Costela</option>
                <option value="contra-file">Contra-filé</option>
                <option value="maminha">Maminha</option>
                <option value="vinagrete">Vinagrete</option>
                <option value="farofa">Farofa</option>
                <option value="soco">Sucos</option>
                <option value="refri">Refrigerantes</option>
                <option value="cerveja">Cervejas</option>
                <option value="bebidas">Bedidas Quente</option>
              </select>

              <input type="submit" value="Enviar" />
            </form>
          </div>
        </div>
      </section>
      <section id="lista-convidados">
        <h1 class="titulo-lista">Lista de Confirmados</h1>
        <div class="convidados">
          <table class="tabela-lista">
            <caption>Lista de paticipantes</caption>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Acompanhantes</th>
                    <th>Item</th>
                    
                </tr>
            </thead>
    
            <tbody>
            <?php
      while($dados = mysqli_fetch_assoc($resultado)){
        echo "<tr>";
        echo "<td>".$dados['idconvidado']."</td>";
        echo "<td>".$dados['nome']."</td>";
        echo "<td>".$dados['acompanhate']."</td>";
        echo "<td>".$dados['item']."</td>";
        echo "<tr>";
      }
    ?>
            </tbody>
        </table>
        </div>
      </section>
    </main>

  </body>
</html>
