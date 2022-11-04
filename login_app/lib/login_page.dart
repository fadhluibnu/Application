import 'dart:convert';

import 'package:flutter/material.dart';
import 'package:login_app/controller/auth_handler.dart';
import 'package:login_app/halaman_utama.dart';
import 'package:flutter_session/flutter_session.dart';
import 'package:http/http.dart' as http;
import 'package:shared_preferences/shared_preferences.dart';

class LoginPage extends StatefulWidget {
  // const LoginPage({super.key});

  @override
  State<LoginPage> createState() => _LoginPageState();
}

class _LoginPageState extends State<LoginPage> {
  TextEditingController email = TextEditingController();
  TextEditingController password = TextEditingController();

  AuthHandler _auth_handler = AuthHandler();

  bool email_tap = true;
  bool password_tap = true;
  void formTap(type, boolean) {
    setState(() {
      if (type == "email") {
        this.email_tap = boolean;
      } else {
        this.password_tap = boolean;
      }
    });
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: Container(
        padding: EdgeInsets.fromLTRB(30, 0, 30, 0),
        child: Center(
          child: Column(
            mainAxisAlignment: MainAxisAlignment.center,
            children: [
              Icon(Icons.account_tree_rounded,
                  size: 50, color: Color.fromARGB(255, 53, 52, 65)),
              Padding(
                padding: const EdgeInsets.fromLTRB(0, 20, 0, 0),
                child: Text("Sign In",
                    style: TextStyle(
                        color: Color.fromARGB(255, 53, 52, 65),
                        fontSize: 24,
                        fontFamily: "Poppins",
                        fontWeight: FontWeight.w700)),
              ),
              Padding(
                padding: const EdgeInsets.fromLTRB(0, 20, 0, 0),
                child: Container(
                  decoration: BoxDecoration(
                      borderRadius: BorderRadius.circular(12),
                      boxShadow: [
                        this.email_tap
                            ? BoxShadow(
                                color: Color.fromARGB(0, 76, 111, 175),
                                spreadRadius: 2,
                                blurRadius: 2)
                            : BoxShadow(
                                color: Color.fromARGB(64, 28, 91, 228),
                                spreadRadius: 3,
                                blurRadius: 0,
                              )
                      ]),
                  child: TextField(
                    controller: email,
                    onChanged: (value) {},
                    onTap: () {
                      formTap("email", false);
                      formTap("password", true);
                    },
                    decoration: InputDecoration(
                        labelText: "Email",
                        labelStyle: TextStyle(fontFamily: "Poppins"),
                        filled: true,
                        fillColor: this.email_tap && email.text == ""
                            ? Color.fromARGB(255, 228, 228, 233)
                            : Colors.white,
                        enabledBorder: this.email_tap == false &&
                                email.text != ""
                            ? OutlineInputBorder(
                                borderRadius: BorderRadius.circular(10),
                                borderSide: BorderSide(
                                    color: Color.fromARGB(0, 76, 175, 79)))
                            : OutlineInputBorder(
                                borderRadius: BorderRadius.circular(10),
                                borderSide: BorderSide(
                                    color: Color.fromARGB(155, 28, 91, 228))),
                        focusedBorder: OutlineInputBorder(
                            borderRadius: BorderRadius.circular(10),
                            borderSide: BorderSide(
                                color: Color.fromARGB(155, 28, 91, 228)))),
                  ),
                ),
              ),
              Padding(
                padding: const EdgeInsets.fromLTRB(0, 10, 0, 0),
                child: Container(
                  decoration: BoxDecoration(
                      borderRadius: BorderRadius.circular(12),
                      boxShadow: [
                        this.password_tap
                            ? BoxShadow(
                                color: Color.fromARGB(0, 76, 111, 175),
                                spreadRadius: 2,
                                blurRadius: 2)
                            : BoxShadow(
                                color: Color.fromARGB(64, 28, 91, 228),
                                spreadRadius: 3,
                                blurRadius: 0,
                              )
                      ]),
                  child: TextField(
                    controller: password,
                    onChanged: (value) {},
                    onTap: () {
                      formTap("email", true);
                      formTap("password", false);
                    },
                    decoration: InputDecoration(
                        labelText: "Password",
                        labelStyle: TextStyle(fontFamily: "Poppins"),
                        filled: true,
                        fillColor: this.password_tap && password.text == ""
                            ? Color.fromARGB(255, 228, 228, 233)
                            : Colors.white,
                        enabledBorder: this.password_tap == false &&
                                password.text != ""
                            ? OutlineInputBorder(
                                borderRadius: BorderRadius.circular(10),
                                borderSide: BorderSide(
                                    color: Color.fromARGB(0, 76, 175, 79)))
                            : OutlineInputBorder(
                                borderRadius: BorderRadius.circular(10),
                                borderSide: BorderSide(
                                    color: Color.fromARGB(155, 28, 91, 228))),
                        focusedBorder: OutlineInputBorder(
                            borderRadius: BorderRadius.circular(10),
                            borderSide: BorderSide(
                                color: Color.fromARGB(155, 28, 91, 228)))),
                  ),
                ),
              ),
              Padding(
                padding: EdgeInsets.fromLTRB(0, 10, 0, 0),
                child: Material(
                    child: SizedBox(
                  width: MediaQuery.of(context).size.width,
                  child: ElevatedButton(
                    child: Padding(
                      padding: const EdgeInsets.all(18),
                      child: Text("Sign In"),
                    ),
                    style: ElevatedButton.styleFrom(
                        shape: RoundedRectangleBorder(
                            borderRadius: BorderRadius.circular(10))),
                    onPressed: () {
                      loginOperation(email.text, password.text);
                    },
                  ),
                )),
              )
            ],
          ),
        ),
      ),
    );
  }

  Future loginOperation(String email, String password) async {
    // if (email != '' && password != '') {
    var response = await http.post(
        Uri.parse("http://my-flutter-api.000webhostapp.com/api/login"),
        headers: <String, String>{
          'Content-Type': 'application/json; charset=UTF-8',
        },
        body:
            jsonEncode(<String, String>{'email': email, 'password': password}));
    var jsonRes = jsonDecode(response.body);

    if (jsonRes != null) {
      SharedPreferences pref = await SharedPreferences.getInstance();
      pref.setString("token", jsonRes["message"]['token']);
      Navigator.pushReplacement(context, MaterialPageRoute(builder: (context) {
        return HalamanUtama();
      }));
    } else {
      await FlutterSession().set('token', '');
    }
    // }
  }
}
