package com.example.perpus.ui.pengunjung

interface PengunjungView {
    fun onSuccessPengunjung(payloadPengunjungPersonal: ArrayList<PayloadPengunjungPersonal>?)
    fun onErrorResponse()
}