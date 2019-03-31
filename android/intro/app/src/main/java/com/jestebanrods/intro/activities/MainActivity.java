package com.jestebanrods.intro.activities;

import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;
import android.widget.Toast;

import com.jestebanrods.intro.R;

public class MainActivity extends AppCompatActivity {

    private TextView txtPrincipal;
    private Button btnOk;

    private Boolean flagText = false;
    private String oldText = "";

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        // Visualización de la interfaz gráfica
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        // Mapeo de los componente visuales
        txtPrincipal = findViewById(R.id.txt_principal);
        btnOk = findViewById(R.id.btn_ok);

        oldText = txtPrincipal.getText().toString();

        // Evento click del botón
        btnOk.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                flagText = !flagText;
                txtPrincipal.setText(flagText ? "Condiciones Aceptadas" : oldText);
            }
        });

        // Evento presionado largo tiempo del botón
        btnOk.setOnLongClickListener(new View.OnLongClickListener() {
            @Override
            public boolean onLongClick(View v) {
                Toast.makeText(MainActivity.this, "Presionando", Toast.LENGTH_SHORT).show();
                return false;
            }
        });
    }

}
