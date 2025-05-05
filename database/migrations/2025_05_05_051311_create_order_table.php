use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); // id bigint, otomatis auto increment
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // foreign key ke tabel users
            $table->foreignId('course_id')->constrained('courses')->onDelete('cascade'); // foreign key ke tabel courses
            $table->decimal('amount', 10, 2); // jumlah yang dibayar, dengan presisi 10 dan 2 digit desimal
            $table->enum('status', ['pending', 'paid', 'completed', 'disputed', 'refunded']); // status order
            $table->timestamps(); // created_at, updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
