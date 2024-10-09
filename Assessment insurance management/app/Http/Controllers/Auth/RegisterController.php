{{


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
public function register(Request $request)
{
$request->validate([
'name' => 'required',
'email' => 'required|email|unique:users',
'password' => 'required|min:6|confirmed',
]);

// Create user
$user = User::create([
'name' => $request->name,
'email' => $request->email,
'password' => Hash::make($request->password),
]);

// Send confirmation email
Mail::to($user->email)->send(new \App\Mail\RegistrationConfirmation($user));

return response()->json(['success' => true, 'message' => 'Registration successful!']);
}
}