namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        return view('beranda.jaringan.profil_jaringan');
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'email' => 'required|email',
            'username' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'payment_method' => 'required',
        ]);

        $user->update([
            'email' => $request->email,
            'username' => $request->username,
            'phone' => $request->phone,
            'address' => $request->address,
            'payment_method' => $request->payment_method,
            'password' => $request->password
                ? Hash::make($request->password)
                : $user->password
        ]);

        return back()->with('success', 'Profil berhasil diperbarui');
    }
}
