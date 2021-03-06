/**
 * Code generated by Microsoft (R) AutoRest Code Generator.
 * Changes may cause incorrect behavior and will be lost if the code is
 * regenerated.
 */

package softheon.enterprise.api.client.models;

import java.util.List;
import com.fasterxml.jackson.annotation.JsonProperty;

/**
 * Model for Template Profiles.
 */
public class ProfileDefinitionModel {
    /**
     * Gets or sets the identifier.
     */
    @JsonProperty(value = "ID")
    private String id;

    /**
     * Gets or sets the type.
     */
    @JsonProperty(value = "Type", required = true)
    private int type;

    /**
     * Gets or sets the name.
     */
    @JsonProperty(value = "Name", required = true)
    private String name;

    /**
     * Gets or sets the reserved string1.
     */
    @JsonProperty(value = "ReservedString1")
    private String reservedString1;

    /**
     * Gets or sets the reserved int1.
     */
    @JsonProperty(value = "ReservedInt1")
    private Integer reservedInt1;

    /**
     * Gets or sets the fields.
     */
    @JsonProperty(value = "Fields")
    private List<FieldDefinitionModel> fields;

    /**
     * Get the id value.
     *
     * @return the id value
     */
    public String id() {
        return this.id;
    }

    /**
     * Set the id value.
     *
     * @param id the id value to set
     * @return the ProfileDefinitionModel object itself.
     */
    public ProfileDefinitionModel withId(String id) {
        this.id = id;
        return this;
    }

    /**
     * Get the type value.
     *
     * @return the type value
     */
    public int type() {
        return this.type;
    }

    /**
     * Set the type value.
     *
     * @param type the type value to set
     * @return the ProfileDefinitionModel object itself.
     */
    public ProfileDefinitionModel withType(int type) {
        this.type = type;
        return this;
    }

    /**
     * Get the name value.
     *
     * @return the name value
     */
    public String name() {
        return this.name;
    }

    /**
     * Set the name value.
     *
     * @param name the name value to set
     * @return the ProfileDefinitionModel object itself.
     */
    public ProfileDefinitionModel withName(String name) {
        this.name = name;
        return this;
    }

    /**
     * Get the reservedString1 value.
     *
     * @return the reservedString1 value
     */
    public String reservedString1() {
        return this.reservedString1;
    }

    /**
     * Set the reservedString1 value.
     *
     * @param reservedString1 the reservedString1 value to set
     * @return the ProfileDefinitionModel object itself.
     */
    public ProfileDefinitionModel withReservedString1(String reservedString1) {
        this.reservedString1 = reservedString1;
        return this;
    }

    /**
     * Get the reservedInt1 value.
     *
     * @return the reservedInt1 value
     */
    public Integer reservedInt1() {
        return this.reservedInt1;
    }

    /**
     * Set the reservedInt1 value.
     *
     * @param reservedInt1 the reservedInt1 value to set
     * @return the ProfileDefinitionModel object itself.
     */
    public ProfileDefinitionModel withReservedInt1(Integer reservedInt1) {
        this.reservedInt1 = reservedInt1;
        return this;
    }

    /**
     * Get the fields value.
     *
     * @return the fields value
     */
    public List<FieldDefinitionModel> fields() {
        return this.fields;
    }

    /**
     * Set the fields value.
     *
     * @param fields the fields value to set
     * @return the ProfileDefinitionModel object itself.
     */
    public ProfileDefinitionModel withFields(List<FieldDefinitionModel> fields) {
        this.fields = fields;
        return this;
    }

}
