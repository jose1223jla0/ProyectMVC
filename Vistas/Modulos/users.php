<?php
$usuarios = new Usuario__Controller();
$pagina = $usuarios->mostrarUsuario__Cont();
$usuarios->borrarUsuario__Cont();
?>
<br> <!-- Vistas/Modulos/empleados.php -->

<div class="relative overflow-x-auto shadow-md sm:rounded-lg p-4">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400z">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
					Name
                </th>
                <th scope="col" class="px-6 py-3">
					Last name
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Phone
                </th>
                <th scope="col" class="px-6 py-3">
                    Edit
                </th>
				<th scope="col" class="px-6 py-3">
                    Delete
                </th>
            </tr>
        </thead>



        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Apple MacBook Pro 17"
                </th>
                <td class="px-6 py-4">
                    Silver
                </td>
                <td class="px-6 py-4">
                    Laptop
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Microsoft Surface Pro
                </th>
                <td class="px-6 py-4">
                    White
                </td>
                <td class="px-6 py-4">
                    Laptop PC
                </td>
                <td class="px-6 py-4">
                    $1999
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
            <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Magic Mouse 2
                </th>
                <td class="px-6 py-4">
                    Black
                </td>
                <td class="px-6 py-4">
                    Accessories
                </td>
                <td class="px-6 py-4">
                    $99
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>





<!-- <div class="container-fluid text-center">
	<h3>Usuarios</h3>
	<table class="table table-bordered">
		<thead class="text-center">
			<tr>
				
			</tr>
		</thead>

		<tbody>
			<?php
			foreach ($pagina as $key => $value) :
			?>
				<tr>
					<td><?= $value['nombre'] ?></td>
					<td><?= $value['apellido'] ?></td>
					<td><?= $value['email'] ?></td>
					<td><?= $value['telefono'] ?></td>
					<td><a href='index.php?ruta=editar&id=<?= $value['id'] ?>'>
							<button class="btn btn-info">Editar</button></td>
					<td><a href='index.php?ruta=users&id=<?= $value['id'] ?>'>
							<button class="btn btn-outline-danger">Borrar</button></td>
				</tr>
			<?php
			endforeach;
			?>
		</tbody>
	</table>
</div> -->