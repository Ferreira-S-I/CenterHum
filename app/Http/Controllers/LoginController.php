<?php

namespace App\Http\Controllers;

use App\Models\User;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('Admin.Auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('admin.home');
        }

        return redirect()->route('login')->with('error', 'Usuário ou senha inválidos');
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('login');
    }

    public function resetPassword()
    {
        return view('Admin.Auth.reset-password');
    }

    public function resetPasswordAction(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return redirect()->route('reset.password')->with('status', 'E-mail não encontrado');
        }

        $token = md5(uniqid(rand(), true));

        $user->update([
            'reset_token' => $token,
        ]);

        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0;                                       // Enable verbose debug output
            $mail->isSMTP();                                            // Set mailer to use SMTP
            $mail->Host       = '';                                     // Specify main and backup SMTP servers
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = '';                                     // SMTP username
            $mail->Password   = '';                                     // SMTP password
            $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
            $mail->Port       = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('', '');
            $mail->addAddress($user->email, $user->name);     // Add a recipient

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Recuperação de Senha';
            $mail->Body = '<a href="' . route('post.reset.password', ['token' => $token]) . '">Clique aqui para recuperar sua senha</a>';

            $mail->send();

            return redirect()->route('status')->with('success', 'E-mail enviado com sucesso');
        } catch (Exception $e) {
            return redirect()->route('reset.password')->with('status', 'Erro ao enviar e-mail');
        }

        return redirect()->route('reset.password')->with('status', 'Erro ao enviar e-mail');
    }
}
