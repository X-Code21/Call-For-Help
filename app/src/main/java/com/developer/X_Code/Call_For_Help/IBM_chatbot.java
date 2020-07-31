package com.developer.X_Code.Call_For_Help;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.webkit.WebSettings;
import android.webkit.WebView;
import android.webkit.WebViewClient;

public class IBM_chatbot extends AppCompatActivity {
    private WebView webView;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_i_b_m_chatbot);
        WebView browser = (WebView) findViewById(R.id.chatbot);
//        browser.loadUrl("https://web-chat.global.assistant.watson.cloud.ibm.com/preview.html?region=eu-gb&integrationID=b3e4b80e-c389-406e-9f5d-598ff2159d7e&serviceInstanceID=4508409a-5db3-4f43-8140-b653ee62f636");
        webView = (WebView) findViewById(R.id.chatbot);
        webView.setWebViewClient(new WebViewClient());
        WebSettings webSettings = webView.getSettings();
        webSettings.setJavaScriptEnabled(true);
        webView.loadUrl("https://web-chat.global.assistant.watson.cloud.ibm.com/preview.html?region=eu-gb&integrationID=b3e4b80e-c389-406e-9f5d-598ff2159d7e&serviceInstanceID=4508409a-5db3-4f43-8140-b653ee62f636");
    }
}