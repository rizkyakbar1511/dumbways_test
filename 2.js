function hitungKembalian(totalBelanja, jumlahUang) {
    console.log("=====Simple Vending Machine=====");
    console.log("Uang yang anda diberikan : "+jumlahUang);
    console.log("Total Belanjaan Anda : "+totalBelanja)
    var kembalian = jumlahUang - totalBelanja;
    console.log("Kembalian Anda : "+kembalian)
      if (totalBelanja >= 200000 ) {
        var cashback =  totalBelanja * 0.1;
        console.log("Selamat Anda Mendapatkan cashback sebesar 10% : "+cashback);
      }

    var totalKembalian = kembalian + cashback;
    console.log("Total Kembalian Anda : "+totalKembalian+" Sudah Termasuk Cashback 10%")

    let modStockkembalian = totalKembalian % 5000;
    let modTotalkembalian = totalKembalian - modStockkembalian;
    console.log("=====Catatan=====")
    console.log("1 x "+modTotalkembalian);
    if(modStockkembalian < 5000){
        console.log(modStockkembalian + " Disumbangkan karena tidak ada pecahan dibawah 5000")
    }
    console.log("=====Have A Nice Day :)=====")
}

hitungKembalian(220000, 250000)
