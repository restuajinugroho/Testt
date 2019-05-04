/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package javaapplication32;

/**
 *
 * @author LENOVO
 */
public class JavaApplication32 {

    /**
     * @param a
     */
    public static void main(String[] args) {
        new JavaApplication32().cetak_gambar(5);
    }
    public void cetak_gambar(int a){
        if (a%2 == 0) {
            System.out.println("Harus Ganjil");
        }else{
            System.out.println("--- Panjang ---");
            int z = a;
            for (; a > 0; a--) {
                for (int i = 0; i < z ; i++) {
                    if (i==0) {
                        System.out.print("*");
                    }else if(a==Math.ceil(z/2)+1){
                        System.out.print("*");
                    }else{
                        System.out.print("=");
                    }
                }
                System.out.println("*");
            }
        }
    }
    
}
