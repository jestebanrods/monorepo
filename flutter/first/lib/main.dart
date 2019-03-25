import 'package:first/screens/home.dart';
import 'package:flutter/material.dart';

void main() {
  runApp(MaterialApp(
    debugShowCheckedModeBanner: false,
    title: 'First App',
    theme: ThemeData(
      primarySwatch: Colors.amber,
    ),
    home: IndexScreen(),
  ));
}
