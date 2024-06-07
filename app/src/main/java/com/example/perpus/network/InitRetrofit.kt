package com.example.perpus.network

import okhttp3.CipherSuite
import okhttp3.ConnectionSpec
import okhttp3.OkHttpClient
import okhttp3.TlsVersion
import retrofit2.Retrofit
import retrofit2.converter.gson.GsonConverterFactory


class InitRetrofit {
    private val host = "192.168.1.7"
    private fun getInitRetrofit(): Retrofit {
        val spec = ConnectionSpec.Builder(ConnectionSpec.MODERN_TLS)
            .tlsVersions(TlsVersion.TLS_1_3)
            .cipherSuites(
                CipherSuite.TLS_ECDHE_ECDSA_WITH_AES_128_GCM_SHA256,
                CipherSuite.TLS_ECDHE_ECDSA_WITH_CHACHA20_POLY1305_SHA256,
                CipherSuite.TLS_ECDHE_ECDSA_WITH_AES_128_CBC_SHA,
                CipherSuite.TLS_ECDHE_ECDSA_WITH_AES_256_CBC_SHA
            )
            .build()

        val client = OkHttpClient.Builder()
            .sslSocketFactory(TLSSocketFactory())
            .build()

        return Retrofit.Builder()
            .baseUrl("http://$host/appc/api-perpus/apii/")
            .addConverterFactory(GsonConverterFactory.create())
            .client(client)
            .build()
    }

    fun getInitInstance(): Api {
        return getInitRetrofit().create(Api::class.java)
    }

    fun getFolderImg(): String {
        return "http://$host/appc/perpustakaan/public/img/buku/"
    }
}