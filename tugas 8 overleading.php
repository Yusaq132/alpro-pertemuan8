class Katak {
    int umur;
    String nama;

    public Katak(int umur, String nama) {
        this.umur = umur;
        this.nama = nama;
    }

    public String caraBergerak() {
        // Implementasi method ini dapat disesuaikan dengan cara bergerak kura-kura
        return " Melompat ";
    }
} 
class Kecebong extends Katak {
    double panjangEkor;

    public Kecebong(int umur, String nama, double panjangEkor) {
        super(umur, nama);
        this.panjangEkor = panjangEkor;
    }

    // Override method caraBergerak dari class Katak
    @Override
    public String caraBergerak() {
        // Implementasi method ini dapat disesuaikan dengan cara bergerak kecebong
        return " Berenang ";
    }
}
public class Main {
    public static void main(String[] args) {
        Katak katak = new Katak(5, "Froggy");
        System.out.println("Nama: " + katak.nama + ", Umur: " + katak.umur + ", Cara Bergerak: " + katak.caraBergerak());

        Kecebong kecebong = new Kecebong(2, "Junior Frog", 10);
        System.out.println("Nama: " + kecebong.nama + ", Umur: " + kecebong.umur + ", Panjang Ekor: " + kecebong.panjangEkor + ", Cara Bergerak: " + kecebong.caraBergerak());
    }
}