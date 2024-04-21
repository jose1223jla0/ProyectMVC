<?php
$ingreso = new Admin__Controller();
$ingreso->Login__Controller();
?>
<br> <!-- Vistas/Modulos/ingreso.php -->
<div class="font-sans flex justify-center  items-center h-screen">
	<div class="max-w-sm md:max-w-lg border-slate-500 border-2 md:text-sm p-6 rounded-2xl shadow-lg bg-slate-800 flex-1 shadow-cyan-500/50">
		<h1 class="text-2xl font-bold mb-4 font-sans text-white">Welcome back</h1>
		<div class="space-y-6">
			<div>
				<div class="grid md:grid-cols-2 md:gap-4">
					<div class="relative flex items-center mb-3 md:mb-0">
						<button class="border border-slate-600 p-2.5 w-full rounded-lg inline-flex justify-center items-center text-sm font-bold text-slate-300 hover:bg-purple-950  hover:text-slate-50 ">
							<svg class="w-5 h-6 text-white me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
								<path fill-rule="evenodd" d="M12.037 21.998a10.313 10.313 0 0 1-7.168-3.049 9.888 9.888 0 0 1-2.868-7.118 9.947 9.947 0 0 1 3.064-6.949A10.37 10.37 0 0 1 12.212 2h.176a9.935 9.935 0 0 1 6.614 2.564L16.457 6.88a6.187 6.187 0 0 0-4.131-1.566 6.9 6.9 0 0 0-4.794 1.913 6.618 6.618 0 0 0-2.045 4.657 6.608 6.608 0 0 0 1.882 4.723 6.891 6.891 0 0 0 4.725 2.07h.143c1.41.072 2.8-.354 3.917-1.2a5.77 5.77 0 0 0 2.172-3.41l.043-.117H12.22v-3.41h9.678c.075.617.109 1.238.1 1.859-.099 5.741-4.017 9.6-9.746 9.6l-.215-.002Z" clip-rule="evenodd" />
							</svg>
							Login in with Google
						</button>
					</div>

					<div class="">
						<button class="border w-full p-2.5 border-slate-600 rounded-lg inline-flex items-center justify-center font-bold text-sm text-slate-300 hover:bg-purple-950 hover:text-slate-50" type="submit">
							<svg class="w-6 h-6 text-white me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
								<path d="M17.537 12.625a4.421 4.421 0 0 0 2.684 4.047 10.96 10.96 0 0 1-1.384 2.845c-.834 1.218-1.7 2.432-3.062 2.457-1.34.025-1.77-.794-3.3-.794-1.531 0-2.01.769-3.275.82-1.316.049-2.317-1.318-3.158-2.532-1.72-2.484-3.032-7.017-1.27-10.077A4.9 4.9 0 0 1 8.91 6.884c1.292-.025 2.51.869 3.3.869.789 0 2.27-1.075 3.828-.917a4.67 4.67 0 0 1 3.66 1.984 4.524 4.524 0 0 0-2.16 3.805m-2.52-7.432A4.4 4.4 0 0 0 16.06 2a4.482 4.482 0 0 0-2.945 1.516 4.185 4.185 0 0 0-1.061 3.093 3.708 3.708 0 0 0 2.967-1.416Z" />
							</svg>
							Login in with Apple
						</button>
					</div>
				</div>
			</div>
			<div class="space-y-6">
				<form action="" method="post">
					<div class="space-y-4">
						<div>
							<label class="block mb-3 text-sm font-bold text-white" for="">Your name</label>
							<div class="relative flex items-center">
								<div class="absolute right-0 pr-2">
									<svg class="w-5 h-6 fill-slate-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
										<path d="M2.038 5.61A2.01 2.01 0 0 0 2 6v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6c0-.12-.01-.238-.03-.352l-.866.65-7.89 6.032a2 2 0 0 1-2.429 0L2.884 6.288l-.846-.677Z" />
										<path d="M20.677 4.117A1.996 1.996 0 0 0 20 4H4c-.225 0-.44.037-.642.105l.758.607L12 10.742 19.9 4.7l.777-.583Z" />
									</svg>
								</div>
								<input class="block text-sm rounded-lg w-full p-2.5 border-2 focus:outline-none focus:ring focus:ring-violet-500 bg-slate-200" type="text" name="email__R" placeholder="Enter your name">
							</div>
						</div>

						<div>
							<label class="block mb-3 text-sm font-bold text-white" for="">Password</label>
							<div class="relative flex items-center">
								<div class="absolute right-0 pr-2">
									<svg class="w-6 h-6 fill-slate-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
										<path fill-rule="evenodd" d="M8 10V7a4 4 0 1 1 8 0v3h1a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h1Zm2-3a2 2 0 1 1 4 0v3h-4V7Zm2 6a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z" clip-rule="evenodd" />
									</svg>
								</div>
								<input class="block text-sm rounded-lg w-full p-2.5 border-2 focus:outline-none focus:ring focus:ring-violet-500 bg-slate-200" type="password" name="contrasena__R" placeholder="***************">
							</div>
						</div>

						<div class="flex justify-between">
							<div>
								<input class="text-pink-600 rounded-sm" type="checkbox">
								<span class="text-white text-sm font-medium ml-2">Remember Me</span>
							</div>

							<div>
								<a data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="text-blue-800 text-sm font-bold hover:underline" href="index.php?ruta=recoverPass">Forgot password?</a>
							</div>

						</div>

						<div class="">
							<button class="border-2 w-full p-2.5 rounded-lg bg-blue-800 text-sm font-bold text-slate-200 border-slate-600 focus:border-lime-500" type="submit">Sign
								in to your account</button>
						</div>
					</div>
				</form>

				<div>
					<p class="text-white text-sm font-medium">Don't have an account yet? <a class="text-blue-800 ml-5 text-sm font-bold hover:underline" href="index.php?ruta=registrar">Sign up here</a></p>
				</div>
			</div>
		</div>
	</div>
</div>