package com.example.perpus.ui.kategori

interface KategoriView {
    fun onSuccessKategori(payloadKategori: ArrayList<PayloadKategori>?)
    fun onErrorResponse()
}