import 'package:flutter/material.dart';
import 'package:login_app/controller/auth_handler.dart';
import 'package:login_app/login_page.dart';
import 'package:login_app/halaman_utama.dart';
import 'package:flutter_session/flutter_session.dart';
import 'package:shared_preferences/shared_preferences.dart';

void main() {
  runApp(MyApp());
}

class MyApp extends StatefulWidget {
  // const MyApp({super.key});

  @override
  State<MyApp> createState() => _MyAppState();
}

class _MyAppState extends State<MyApp> {
  String loginStatus = 'test';

  @override
  void initState() {
    super.initState();
    changeStatus();
  }

  dynamic changeStatus() async {
    SharedPreferences pref = await SharedPreferences.getInstance();
    setState(() {
      loginStatus = pref.getString('token') ?? '';
    });
  }

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
        home: Scaffold(
      body: Column(
        children: [Text(loginStatus)],
      ),
    ));
  }
}
