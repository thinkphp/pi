import java.util.*
 
fun main(args: Array<String>) {
 
    var t1: Double = 1.0
 
    var t2: Double = 1.0 - 1.0 / 3.0
 
    var EPS: Double = 0.000001
 
    var r: Double
 
    var i: Int = 5
 
    var sign: Int = 1
 
    if(t1 > t2) r = t1 - t2
 
          else 
                r = t2 - t1  
 
    while(4 * r >= EPS) {
 
          t1 = t2;
 
          t2 = t1 + sign * 1.0 / i
 
          i = i + 2
 
          sign = sign * (-1)         
 
          if(t1 > t2) r = t1 - t2
 
                    else 
 
                      r = t2 - t1    
 
    }
 
    println("PI ~ " + 4*t2)
}
