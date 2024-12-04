var nama = "John";  // Nama pemain
var peran = "Penyihir"; // Peran pemain

// Cek apakah nama diisi
if (nama === "") {
  console.log("Nama harus diisi!");
} else if (peran === "") {
  // Jika nama ada tetapi peran belum diisi
  console.log("Halo " + nama + ", Pilih peranmu untuk memulai game!");
} else {
  // Jika nama dan peran sudah diisi
  console.log("Selamat datang di Dunia Werewolf, " + nama);
  
  if (peran === "Penyihir") {
    console.log("Halo Penyihir " + nama + ", kamu dapat melihat siapa yang menjadi werewolf!");
  } else if (peran === "Guard") {
    console.log("Halo Guard " + nama + ", kamu akan membantu melindungi temanmu dari serangan werewolf.");
  } else if (peran === "Werewolf") {
    console.log("Halo Werewolf " + nama + ", Kamu akan memakan mangsa setiap malam!");
  }
}
