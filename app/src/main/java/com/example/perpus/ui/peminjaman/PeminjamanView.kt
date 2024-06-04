package com.example.perpus.ui.peminjaman

interface PeminjamanView {
    fun onSuccessPeminjaman(payloadPeminjaman: ArrayList<PayloadPeminjaman>?)
    fun onErrorResponse()
}