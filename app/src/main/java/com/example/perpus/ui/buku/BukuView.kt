package com.example.perpus.ui.buku

interface BukuView {
    fun onSuccessBuku(payloadBuku: ArrayList<PayloadBuku>?)
    fun onErrorResponse()
}