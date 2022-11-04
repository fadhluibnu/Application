import 'dart:convert';
// import 'dart:js';
import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;
import 'package:flutter_session/flutter_session.dart';
import 'package:login_app/halaman_utama.dart';

// class AuthHandler {
//   String _res = '';
//   Future loginOperation(String email, String password) async {
//     if (email != '' && password != '') {
//       var response = await http.post(
//           Uri.parse("http://my-flutter-api.000webhostapp.com/api/login"),
//           headers: <String, String>{
//             'Content-Type': 'application/json; charset=UTF-8',
//           },
//           body: jsonEncode(
//               <String, String>{'email': email, 'password': password}));
//       var jsonRes = jsonDecode(response.body);

//       if (jsonRes['status'] == 200 && jsonRes != null) {
//         _res = jsonRes["message"]['token'];
//         await FlutterSession().set('token', jsonRes["message"]['token']);
//       } else {
//         await FlutterSession().set('token', '');
//       }
//     }
//   }

//   Future setSession() async {
//     await FlutterSession().set('token', '');
//   }

//   String get res {
//     return _res;
//   }
// }

class AuthHandler extends StatefulWidget {
  // const AuthHandler({Key key}) : super(key: key);

  @override
  State<AuthHandler> createState() => _AuthHandlerState();
}

class _AuthHandlerState extends State<AuthHandler> {
  Future loginOperation(String email, String password) async {
    if (email != '' && password != '') {
      var response = await http.post(
          Uri.parse("http://my-flutter-api.000webhostapp.com/api/login"),
          headers: <String, String>{
            'Content-Type': 'application/json; charset=UTF-8',
          },
          body: jsonEncode(
              <String, String>{'email': email, 'password': password}));
      var jsonRes = jsonDecode(response.body);

      if (jsonRes['status'] == 200 && jsonRes != null) {
        await FlutterSession().set('token', jsonRes["message"]['token']);
        Navigator.push(
            context, MaterialPageRoute(builder: (context) => HalamanUtama()));
      } else {
        await FlutterSession().set('token', '');
      }
    }
  }

  @override
  Widget build(BuildContext context) {
    return Container();
  }
}
