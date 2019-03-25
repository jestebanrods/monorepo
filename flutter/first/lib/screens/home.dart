import 'package:flutter/material.dart';

class IndexScreen extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        leading: IconButton(
          icon: Icon(Icons.dehaze),
          onPressed: null,
          tooltip: 'Leading',
        ),
        title: Text('Index Screen'),
        actions: <Widget>[
          IconButton(
            icon: Icon(Icons.search),
            tooltip: 'Search',
            onPressed: null,
          ),
          IconButton(
            icon: Icon(Icons.delete),
            tooltip: 'Delete',
            onPressed: null,
          ),
        ],
      ),
      body: Center(
        child: Text('Jossie Esteban'),
      ),
      floatingActionButton: FloatingActionButton(
        tooltip: 'Add',
        child: Icon(Icons.add),
        onPressed: null,
      ),
      bottomNavigationBar: BottomNavigationBar(
        items: <BottomNavigationBarItem>[
          BottomNavigationBarItem(icon: Icon(Icons.home), title: Text('Home')),
          BottomNavigationBarItem(
              icon: Icon(Icons.business), title: Text('Business')),
          BottomNavigationBarItem(
              icon: Icon(Icons.school), title: Text('School')),
        ],
        currentIndex: 1,
        fixedColor: Colors.purple,
      ),
    );
  }
}
