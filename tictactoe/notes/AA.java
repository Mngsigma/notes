import java.io.*;
class AA
{
  public static void main(String a[]) throws Exception
  {   
    //FileOutputStream fp=new FileOutputStream("E:\\java program\\write.txt") ;
	//String s="kaise le baba";
	//byte b[]=s.getBytes();
	//fp.write(b);
   // fp.close();
   int i;
   FileInputStream fi=new FileInputStream("E:\\java program\\write.txt");
    while((i=fi.read())!=-1){
	System.out.println((char)i);}
   fi.close();
   
   
   
   
  }
}