<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Klinik - Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <!-- Sidebar -->
  <div class="flex h-screen">
    <aside class="w-64 bg-white shadow-lg p-4">
      <h2 class="text-xl font-bold mb-6">Klinik</h2>
      <nav class="space-y-4">
        <a href="#" class="block text-gray-700 hover:text-blue-500">Dashboard</a>
        <a href="#registrasi" class="block text-gray-700 hover:text-blue-500">Registrasi Pasien</a>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">
      <h1 class="text-2xl font-semibold mb-4">Dashboard</h1>
      <p class="text-gray-600">Selamat datang di sistem informasi klinik.</p>

      <!-- Registrasi Pasien -->
      <section id="registrasi" class="mt-10 bg-white p-6 rounded shadow-md max-w-xl">
        <h2 class="text-xl font-bold mb-4">Form Registrasi Pasien</h2>
        <form action="#" method="POST" class="space-y-4">
          <div>
            <label class="block text-sm font-medium">Nama Lengkap</label>
            <input type="text" name="nama" required class="w-full border px-3 py-2 rounded" />
          </div>
          <div>
            <label class="block text-sm font-medium">Jenis Kelamin</label>
            <select name="gender" required class="w-full border px-3 py-2 rounded">
              <option value="">-- Pilih --</option>
              <option value="L">Laki-laki</option>
              <option value="P">Perempuan</option>
            </select>
          </div>
          <div>
            <label class="block text-sm font-medium">Tanggal</label>
            <input type="date" name="birth" required class="w-full border px-3 py-2 rounded" />
          </div>
          <div>
            <label class="block text-sm font-medium">Alamat</label>
            <textarea name="address" rows="3" class="w-full border px-3 py-2 rounded"></textarea>
          </div>
          <div>
            <label class="block text-sm font-medium">No. Telepon</label>
            <input type="text" name="phone" required class="w-full border px-3 py-2 rounded" />
          </div>
          <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Daftar</button>
        </form>
      </section>
    </main>
  </div>

</body>
</html>
