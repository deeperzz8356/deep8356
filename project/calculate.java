import java.awt.*;
import java.awt.event.*;
/**
 * calculate
 */
public class calculate implements ActionListener{
 Frame f=new Frame("Calculator");
 Label l1=new Label("First number");
 Label l2=new Label("Seconde number");
 Label l3=new Label("Third number");
 TextField t1=new TextField();
 TextField t2=new TextField();
 TextField t3=new TextField();
 Button b1=new Button("ADD");
 Button b2=new Button("SUB");
 Button b3=new Button("MUL");
 Button b4=new Button("Div");
 Button b5=new Button("Cancel");
 calculate()
 {
    l1.setBounds(50,100,100,50);
    l2.setBounds(50,140,100,50);
    l3.setBounds(50,180,100,50);
    t1.setBounds(200,100,100,30);
    t2.setBounds(200,140,100,30);
    t3.setBounds(200,180,100,30);
    b1.setBounds(050,250,50,20);
    b2.setBounds(110,250,50,20);
    b3.setBounds(170,250,50,20);
    b4.setBounds(230,250,50,20);
    b5.setBounds(290,250,50,20);
    f.add(l1);
    f.add(l2);
    f.add(l3);
    f.add(t1);
    f.add(t2);
    f.add(t3);
    f.add(b1);
    f.add(b2);
    f.add(b3);
    f.add(b4);
    f.add(b5);
    b1.addActionListener(this);
    b2.addActionListener(this);
    b3.addActionListener(this);
    b4.addActionListener(this);
    b5.addActionListener(this);
    f.setLayout(null);
    f.setVisible(true);
    f.setSize(400,350);

}
    @Override
    public void actionPerformed(ActionEvent e) {
       int n1=Integer.parseInt(t1.getText());
       int n2=Integer.parseInt(t2.getText());
    if (e.getSource()==b1) {
        t3.setText(String.valueOf(n1+n2));
        
    }  
    if (e.getSource()==b2) {
        t3.setText(String.valueOf(n1-n2));
        
    } 
    if (e.getSource()==b3) {
        t3.setText(String.valueOf(n1*n2));
        
    }  if (e.getSource()==b4) {
        t3.setText(String.valueOf(n1/n2));
        
    }  
    if (e.getSource()==b5) {
System.exit(0);        
    } 
   
    }
    public static void main(String[] args) {
          new calculate();
        
    }

    
}