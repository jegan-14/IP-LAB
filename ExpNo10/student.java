package exp10;

import java.util.ArrayList;

public class student {
    public String name;
    public int mark;
    public String mail;
    public student(String name,int mark,String mail){
        this.name=name;
        this.mark=mark;
        this.mail=mail;
    }
    public String getName(){
        return name;
    }
    public int getMark(){
        return mark;
    }
    public String getMail(){
        return mail;
    }
    public void setName(String name){
        this.name=name;
    }
    public void setMark(int mark){
        this.mark=mark;
    }
    public void setMail(String mail){
        this.mail=mail;
    }
    public static void sort(ArrayList<student> list){
        list.sort((o1, o2)
                  -> o1.getName().compareTo(
                      o2.getName()));
    }
}

