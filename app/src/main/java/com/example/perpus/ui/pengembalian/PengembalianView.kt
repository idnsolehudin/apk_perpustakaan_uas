package com.example.perpus.ui.pengembalian

interface PengembalianView {
    fun onSuccessPengembalian(payloadPengembalian: ArrayList<PayloadPengembalian>?)
    fun onErrorResponse()
}