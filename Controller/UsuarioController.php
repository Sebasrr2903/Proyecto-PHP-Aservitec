<?php
include_once '../Model/UsuarioModel.php';
include_once '../Model/RegistroModel.php';
session_start();
switch($_GET["op"]){
    case "iniciar":
        $username = $_POST['username'];
        $password = $_POST["password"];
        $aux=false;
        $user=User::mostrar($_POST['username']);
        if($user!=null){
            foreach ($user as $row){
                $id=$row["Usuario_ID"];
                $contra=$row["password"];
                $rol=$row["Rol_ID"];
                $nombre=$row["username"];
            }
            if(password_verify($password,$contra)){
                $aux=true;
            }
            if($aux){
                $_SESSION['Rol_ID'] = $rol;
                $_SESSION['username']=$nombre;
                $_SESSION['id_usu']=$id;
                switch($rol){
                    case 1:
                        echo 1;
                    break;
                    case 2:
                        header('location: ../view/IndexUsua.php');
                    break;
                default:
                }
            } 
        }else{
            // no existe el usuario
            echo "El usuario esta incorrecto o contraseña incorrecta";
        }
        break;
    case "validar":
        $correo=$_POST["email"];
        $encontrado=User::mostrar($correo);
        if($encontrado!=null){
            echo 1;
        }else{
            echo 'null';
        }
        break;
    case "insertar":
        $pass=password_hash($_POST["pass"],PASSWORD_BCRYPT);
        if($_POST["Rol"]){
            User::insertar($_POST["correo"],$pass,$_POST["Rol"]);
        }else{
            User::insertar($_POST["correo"],$pass,2);
        }
        User::insertar_datos($_POST["Identificacion"],$_POST["TipoId"],$_POST["nombre"],
        $_POST["correo"],$_POST["telefono"],$_POST["Provincia"],$_POST["Canton"],$_POST["Distrito"],$_POST["direccion"]);
        break;
    case "cerrar":
        session_destroy();
        break;
    case "consultar":
        $resultado=User::consultar($_POST["ID"]);
        if($resultado!=null){
            $_SESSION["id"]=$_POST["ID"];
        }else{
            echo 'null';
        }
        break;
    case "actualizar":
        $datos=User::consultar($_GET["id"]);
        foreach ($datos as $row){
            $nombre=$row["Nombre"];
            $correo=$row["Correo"];
            $tel=$row["Telefono"];
            $provincia=$row["Provincia_ID"];
            $canton=$row["Canton_ID"];
            $distrito=$row["Distrito_ID"];
            $direccion=$row["Direccion_Exacta"];
        }
        $usuario=User::mostrar($correo);
        foreach ($usuario as $row){
            $idUsuario=$row["Usuario_ID"];
            $rol=$row["Rol_ID"];
        }
        $resultado=User::mostrarRol($rol);
        foreach ($resultado as $row){
            $Nrol=$row["Nombre"];
        }
        $resultado2=User::mostrarProvincia($provincia);
        foreach ($resultado2 as $row){
            $Nprovincia=$row["Nombre"];
        }
        $resultado3=User::mostrarCanton($canton);
        foreach ($resultado3 as $row){
            $Ncanton=$row["Nombre"];
        }
        $cantones=RegistroModel::mostrarCanton($provincia);
        $resultado4=User::mostrarDistrito($distrito);
        foreach ($resultado4 as $row){
            $Ndistrito=$row["Nombre"];
        }
        $distritos=RegistroModel::mostrarDistrito($canton);
        echo '<input type="hidden" name="cedula" value="'.$_GET["id"].'"/>'.
            '<input type="hidden" name="id" value="'.$idUsuario.'"/>'.
            '<div class="form-group">
                <label for="Rol" class="form-label">Rol</label>
                <br>
                <select class="form_select" name="Rol" id="Rol" onfocus="llenarRol()">
                    <option selected value="'.$rol.'">'.$Nrol.'</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" required="true" value="'.$nombre.'"/>
            </div>
            <br>
            <div class="form-group">
                <label for="correo" class="form-label">Correo</label>
                <input type="email" class="form-control" name="correo" id="correo" required="true" value="'.$correo.'"/>
            </div>
            <br>
            <div class="form-group">
                <label for="telefono" class="form-label">Telefono</label>
                <input type="tel" class="form-control" name="telefono" required="true" value="'.$tel.'"/>
            </div>
            <br>
            <div class="form-group">
                <label for="Provincia" class="form-label">Provincia</label>
                <br>
                <select class="form_select" name="Provincia" id="Provincia" onfocus="llenarProvincias()" onclick="cambiarProvincia(this.value)">
                    <option selected value="'.$provincia.'">'.$Nprovincia.'</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="Canton" class="form-label">Canton</label>
                <br>
                <select class="form_select" name ="Canton" id="Canton" onclick="cambiarCanton(this.value)">
                    <option selected value="'.$canton.'">'.$Ncanton.'</option>';
        foreach($cantones as $row){
            if($row["Nombre"]!=$Ncanton){
                echo '<option value="'.$row["Canton_ID"].'">'.$row["Nombre"].'</option>';
            }
        }
        echo'</select>
        </div>';
        echo '<br>
            <div class="form-group">
                <label for="Distrito" class="form-label">Distrito</label>
                <br>
                <select class="form_select" name ="Distrito" id="Distrito">
                    <option selected value="'.$distrito.'">'.$Ndistrito.'</option>';
        foreach ($distritos as $row){
            if($row["Nombre"]!=$Ndistrito){
                echo '<option value="'.$row["Distrito_ID"].'">'.$row["Nombre"].'</option>';
            }
        }
        echo'</select>
        </div>';
        echo '<br>
            <div class="form-group">
                <label for="direccion" class="form-label">Dirección exacta</label>
                <textarea name="direccion" class="form-control" rows="3" required="true">'.$direccion.'</textarea>
            </div>';
        break;
    case "editar":
        if($_POST["id"]==$_SESSION["id_usu"]){
            if(($_POST["correo"]!=$_SESSION["username"])||($_POST["Rol"]!=$_SESSION['Rol_ID'])){
                echo 1;
            }else{
                echo 2;
            }  
        }
        User::actualizar($_POST["correo"],$_POST["Rol"],$_POST["id"]);
        User::actualizarDatos($_POST["nombre"],$_POST["correo"],$_POST["telefono"],
        $_POST["Provincia"],$_POST["Canton"],$_POST["Distrito"],$_POST["direccion"],$_POST["cedula"]);
        break;
    case "eliminar":
        $resultado=User::consultar($_POST["ID"]);
        if($resultado!=null){
            foreach ($resultado as $row){
                $correo=$row["Correo"];
            }
            $usuario=User::mostrar($correo);
            foreach ($usuario as $row){
                $idUsuario=$row["Usuario_ID"];
            }
            if($idUsuario==$_SESSION["id_usu"]){
                echo 1;
            }else{
                echo 2;
            }
            User::eliminar($idUsuario);
            User::eliminarDatos($_POST["ID"]);
        }else{
            echo 3;
        }
        break;
}







function ListarUsuarios()
{
    $stmt= ListarUsuariosModel();

   
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo '<tr>';
            echo '<td>' . $row["Rol_ID"] . '</td>';
            echo '<td>' . $row["username"] . '</td>';
            echo '<td>' . $row["password"] . '</td>';
            echo '<td>' . $row["Usuario_ID"] . '</td>';
            echo '</tr>';
        }
    
}
