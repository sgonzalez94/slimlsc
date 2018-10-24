<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

//Obtener todos los clientes
$app->get('/api/clientes', function(Request $request, Response $response){
    
    $consulta = 'SELECT * FROM clientes';
    
    try{
        //Instanciar BD
        $db = new db();
        
        //Conexion
        $db = $db->conectar();
        $ejecutar = $db->query($consulta);
        $clientes = $ejecutar->fetchAll(PDO::FETCH_OBJ);
        $db = null;

        return $this->view->render($response, 'lista.php', [
            'clientes' => $clientes
        ]);
        
        //Exportar formato JSON
       // echo json_encode($clientes);
        
    } catch (PDOException $e){
        
        echo '"error": {"text": ' . $e->getMessage() . '}';
        
    }
})->setName('lista');

//Obtener cliente por id
$app->get('/api/clientes/{id}', function(Request $request, Response $response){
    
    $id = $request->getAttribute('id');
    $consulta = 'SELECT * FROM clientes WHERE id = ' . $id . '';
    
    try{
        //Instanciar BD
        $db = new db();
        
        //Conexion
        $db = $db->conectar();
        $ejecutar = $db->query($consulta);
        $cliente = $ejecutar->fetchAll(PDO::FETCH_OBJ);
        $db = null;


        
        //Exportar formato JSON
        echo json_encode($cliente);
        
    } catch (PDOException $e){
        
        echo '"error": {"text": ' . $e->getMessage() . '}';
        
    }
});

//Agregar un cliente
$app->post('/api/clientes/agregar', function(Request $request, Response $response){
    
    $nombre = $request->getParam('nombre');
    $apellidos = $request->getParam('apellidos');
    $telefono = $request->getParam('telefono');
    $email = $request->getParam('email');
    $direccion = $request->getParam('direccion');
    $ciudad = $request->getParam('ciudad');
    $departamento = $request->getParam('departamento');
    
    $consulta = "INSERT INTO clientes(nombre, apellidos, telefono, email, direccion, ciudad, departamento) VALUES"
            . "(:nombre, :apellidos, :telefono, :email, :direccion, :ciudad, :departamento )";
    
    try{
        //Instanciar BD
        $db = new db();
        
        //Conexion
        $db = $db->conectar();
        $stmt = $db->prepare($consulta);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apellidos', $apellidos);
        $stmt->bindParam(':telefono', $telefono);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':direccion', $direccion);
        $stmt->bindParam(':ciudad', $ciudad);
        $stmt->bindParam(':departamento', $departamento);
        
        $stmt->execute();
        $db = null;
        
        //echo '{"notice": {"text": "Cliente agregado"}}';
         return $response->withRedirect('/api/clientes'); 
        
    } catch (PDOException $e){
        
        echo '{"error": {"text": ' . $e->getMessage() . '}}';
        
    }
});

//Actualizar un cliente
$app->put('/api/clientes/actualizar/{id}', function(Request $request, Response $response){
    
    $id = $request->getAttribute('id');
    
    $nombre = $request->getParam('nombre');
    $apellidos = $request->getParam('apellidos');
    $telefono = $request->getParam('telefono');
    $email = $request->getParam('email');
    $direccion = $request->getParam('direccion');
    $ciudad = $request->getParam('ciudad');
    $departamento = $request->getParam('departamento');
    
    $consulta = "UPDATE clientes SET"
            . " nombre          = :nombre,"
            . " apellidos       = :apellidos,"
            . " telefono        = :telefono,"
            . " email           = :email,"
            . " direccion       = :direccion,"
            . " ciudad          = :ciudad,"
            . " departamento    = :departamento"
            . " WHERE id = $id";
    
    try{
        //Instanciar BD
        $db = new db();
        
        //Conexion
        $db = $db->conectar();
        $stmt = $db->prepare($consulta);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':apellidos', $apellidos);
        $stmt->bindParam(':telefono', $telefono);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':direccion', $direccion);
        $stmt->bindParam(':ciudad', $ciudad);
        $stmt->bindParam(':departamento', $departamento);
        
        $stmt->execute();
        $db = null;
        
        echo '{"notice": {"text": "Cliente actualizado"}}';
        
    } catch (PDOException $e){
        
        echo '{"error": {"text": ' . $e->getMessage() . '}}';
        
    }
});

//Eliminar cliente por id
$app->delete('/api/clientes/eliminar/{id}', function(Request $request, Response $response){
    
    $id = $request->getAttribute('id');
    $consulta = 'DELETE FROM clientes WHERE id = ' . $id . '';
    
    try{
        //Instanciar BD
        $db = new db();
        
        //Conexion
        $db = $db->conectar();
        $stmt = $db->prepare($consulta);
        $stmt->execute();
        $db = null;
        
        //Exportar formato JSON
        echo '{"notice": {"text": "Cliente eliminado"}}';
        
    } catch (PDOException $e){
        
        echo '"error": {"text": ' . $e->getMessage() . '}';
        
    }
});

// Render Twig template in route
$app->get('/hello/{name}', function ($request, $response, $args) {
    return $this->view->render($response, 'lista.html', [
        'name' => $args['name']
    ]);
})->setName('profile');






