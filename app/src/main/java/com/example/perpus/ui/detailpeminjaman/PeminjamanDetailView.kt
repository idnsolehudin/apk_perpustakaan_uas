package com.example.perpus.ui.detailpeminjaman

interface PeminjamanDetailView {
    fun onSuccessPeminjamanDetail(payloadPeminjamanDetail: ArrayList<PayloadPeminjamanDetail>?)
    fun onErrorResponse()
}