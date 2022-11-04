import 'dart:convert';

import 'package:flutter/material.dart';
import 'package:flutter/src/widgets/container.dart';
import 'package:flutter/src/widgets/framework.dart';
import 'package:flutter_session/flutter_session.dart';
import 'package:login_app/login_page.dart';
import 'package:http/http.dart' as http;
import 'package:shared_preferences/shared_preferences.dart';

class HalamanUtama extends StatefulWidget {
  // const HalamanUtama({super.key});

  @override
  State<HalamanUtama> createState() => _HalamanUtamaState();
}

class _HalamanUtamaState extends State<HalamanUtama> {
  // var token = await FlutterSession().get('token');

  String text_token = 'no token';

  void getName() async {
    SharedPreferences pref = await SharedPreferences.getInstance();
    text_token = pref.getString('token');
  }

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
        home: Scaffold(
      appBar: AppBar(title: Text("Main Page")),
      body: Center(
          child: Column(
        children: [
          Text("Token : " + text_token),
          ElevatedButton(
            child: Text('Logout'),
            onPressed: () {
              logoutOperation();
            },
          ),
        ],
      )),
    ));
  }

  Future logoutOperation() async {
    String token = '';
    FutureBuilder(
        future: FlutterSession().get('token'),
        builder: (context, snapshot) {
          return token = snapshot.data;
        });
    var response = await http.post(
      Uri.parse("http://my-flutter-api.000webhostapp.com/api/logout"),
      headers: <String, String>{
        'Content-Type': 'application/json; charset=UTF-8',
      },
      body: jsonEncode(<String, String>{'token': token}),
    );

    var jsonRes = jsonDecode(response.body);
    if (jsonRes['status'] == 200) {
      SharedPreferences pref = await SharedPreferences.getInstance();
      pref.setString("token", 'false');
      Navigator.pushReplacement(context, MaterialPageRoute(builder: (context) {
        return LoginPage();
      }));
    }
  }
}
