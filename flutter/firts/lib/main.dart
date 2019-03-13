import 'package:flutter/material.dart';

void main() => runApp(MyApp());

class MyApp extends StatelessWidget {
  // This widget is the root of your application.
  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      title: 'Pruebas',
      theme: ThemeData(
        primarySwatch: Colors.amber,
      ),
      home: MyStatelessWidget(),
    );
  }
}

class MyStatelessWidget extends StatelessWidget {
  MyStatelessWidget({Key key}) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Scaffold(
        appBar: AppBar(
          title: Text('Primera App Flutter'),
          actions: <Widget>[
            IconButton(
              icon: Icon(Icons.account_circle),
              tooltip: 'Click',
              onPressed: () {
                // ...
              },
            ),
          ],
        ),
        body: Row(
            crossAxisAlignment: CrossAxisAlignment.center,
            mainAxisAlignment: MainAxisAlignment.center,
            children: <Widget>[
              Padding(
                padding: EdgeInsets.only(top: 15.0),
                child: Text('Jossie Esteban'),
              ),
            ]));
  }
}
